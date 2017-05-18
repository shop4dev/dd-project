<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ToList;
use AppBundle\Form\ListType;
use AppBundle\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use AppBundle\Entity\Team;
use AppBundle\Entity\Members;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TeamController
 * @package AppBundle\Controller
 *
 * @Route("/teams")
 */
class TeamController extends Controller
{
    /**
     * @Route("/{id}", name="teams_todo_list")
     * @Method("GET")
     */
    public function listAction($id, Request $request)
    {
        $team = $this->getDoctrine()
            ->getRepository('AppBundle:Team')
            ->find($id);
        
            $lists = $team->getToLists();

        $data = array();

        $todoCount = 0;

        foreach  ($lists as $list)
        {
            $todos = $list->getTodos();
            $todoCount = $todoCount + count($todos);
            $data[$list->getId()] = $todos;
        }
        $time = new \DateTime();

        return $this->render('dashboard/teamdash.html.twig', array(
            'lists' => $lists,
            'data' => $data,
            'time' => $time,
            'team' => $team
        ));
    }
    /**
     * @Route("/{id}/create", name="create_team_list")
     * @Method({"GET", "POST"})
     */
    public function createListAction($id, Request $request)
    {
        $tolist = new ToList();

        $form = $this->createForm(ListType::class, $tolist);

        $form->handleRequest($request);

        $validator = $this->get('validator');
        $errors = $validator->validate($tolist);

        if($form->isSubmitted() && $form->isValid())
        {
            $team = $this->getDoctrine()
                ->getRepository('AppBundle:Team')
                ->find($id);

            $name = $form['name']->getData();

            $tolist->setName($name);
            $tolist->setTeam($team);

            $em = $this->getDoctrine()->getManager();

            $em->persist($tolist);
            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute('teams_list');
        }

            return $this->render('task/create.html.twig', array(
                'form' => $form->createView(),
                'errors' => $errors,
                'path' => 'create_list'
            ));
    }
    /**
     * @Route("/{id}/delete/{id2}", name="delete_team_list")
     * @Method({"DELETE", "GET"})
     */
    public function deleteListAction($id, $id2)
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('AppBundle:ToList')->find($id2);

        $em->remove($list);
        $em->flush();

        return $this->redirectToRoute('teams_list');
    }
}