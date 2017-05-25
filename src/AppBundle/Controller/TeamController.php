<?php

namespace AppBundle\Controller;

use AppBundle\Form\MemberType;
use AppBundle\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use AppBundle\Entity\Team;
use AppBundle\Entity\ToList;
use AppBundle\Entity\Members;
use Symfony\Component\HttpFoundation\Request;
//use AppBundle\Form\TeamType;

/**
 * Class TeamListController
 * @package AppBundle\Controller
 *
 * @Route("/teams")
 */
class TeamController extends Controller
{
    /**
     * @Route("/", name="teams_list")
     * @Method("GET")
     */
    public function listAction(Request $request)
    {
        $memberships = $this->getUser()->getMemberss();

        $data = array();
        $data2 = array();

        foreach  ($memberships as $member)
        {
            $team = $member->getTeam();
            $data[$member->getId()] = $team;
            $member_list = $team->getMembers();
            $data3 = array();
            foreach ($member_list as $mem){
                $user = $mem->getUser();
                array_push($data3, $user);
            }
            $data2[$team->getId()] = $data3;
        }

        return $this->render('dashboard/teamlist.html.twig', array(
            'memberships' => $memberships,
            'data' => $data,
            'data2' => $data2
        ));
    }
    /**
     * @Route("/create", name="teams_create")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $request)
    {
        $team = new Team();

        $form = $this->createForm(TeamType::class, $team);

        $form->handleRequest($request);

        $validator = $this->get('validator');
        $errors = $validator->validate($team);

        if($form->isSubmitted() && $form->isValid())
        {
            $user = $this->getUser();

            $name = $form['name']->getData();

            $team->setName($name);
            $team->setAdmin($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($team);
            $em->flush();

            $member = new Members();
            $member->setTeam($team);
            $member->setUser($user);

            $em->persist($member);
            $em->flush();

            echo "<script>window.opener.location.reload();window.close();</script>";
        }

//        if (count($errors) > 0) {
        return $this->render('task/create.html.twig', array(
            'form' => $form->createView(),
            'errors' => $errors,
            'path' => 'create_list'
        ));
//        }
    }
    /**
     * @Route("/delete/{id}", name="teams_delete")
     * @Method({"GET"})
     */
    public function deleteListAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('AppBundle:Team')->find($id);

        $em->remove($list);
        $em->flush();

        return $this->redirectToRoute('teams_list');
    }
    /**
     * @Route("/{id}/delete_member/{id2}", name="member_delete")
     * @Method({"GET"})
     */
    public function deleteMemberAction($id, $id2)
    {
        $em = $this->getDoctrine()->getManager();
        $member = $em->getRepository('AppBundle:Members')->findOneBy(
            array('user' => $id2, 'team' => $id)
        );

        $em->remove($member);
        $em->flush();

        return $this->redirectToRoute('teams_list');
    }
    /**
     * @Route("/{id}/add_member", name="member_add")
     * @Method({"GET", "POST"})
     */
    public function addMemberAction($id, Request $request)
    {
        $member = new Members();

        $form = $this->createForm(MemberType::class, $member);

        $form->handleRequest($request);

        $validator = $this->get('validator');
        $errors = $validator->validate($member);

        if($form->isSubmitted() && $form->isValid())
        {
            $name = $form['user']->getData();

            $team = $this->getDoctrine()
                ->getRepository('AppBundle:Team')
                ->find($id);

            $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->findOneBy(array(
                    'name' => $name
                ));
            if($user != null) {
                $member->setUser($user);
                $member->setTeam($team);

                $em = $this->getDoctrine()->getManager();

                $em->persist($member);
                $em->flush();

                $this->addFlash(
                    'notice',
                    'List Added'
                );
            }

            echo "<script>window.opener.location.reload();window.close();</script>";
        }

        return $this->render('task/create.html.twig', array(
            'form' => $form->createView(),
            'errors' => $errors,
            'path' => 'create_list'
        ));
    }
    /**
     * @Route("/{id}/add_member/{id2}", name="member_profile_add")
     * @Method({"GET", "POST"})
     */
    public function addMemberProfileAction($id, $id2, Request $request)
    {
        $member = new Members();
        $team = $this->getDoctrine()
            ->getRepository('AppBundle:Team')
            ->find($id);

        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($id2);

        $member->setUser($user);
        $member->setTeam($team);

        $em = $this->getDoctrine()->getManager();

        $em->persist($member);
        $em->flush();

        return $this->redirectToRoute('teams_list');
    }

    /**
     * @Route("/search", name="search2")
     * @Method({"GET", "POST"})
     */
    public function userSearchAction()
    {
        $users = null;

        $searchq = $_POST['searchVal'];

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT u FROM AppBundle:User u WHERE u.email like :searchmail OR u.name like :searchname")
            ->setParameter('searchmail', '%'.$searchq.'%')
            ->setParameter('searchname', '%'.$searchq.'%');

        $users = $query->getResult();

        return $this->render('dashboard/search.html.twig', array(
            'users' => $users
        ));
    }
}