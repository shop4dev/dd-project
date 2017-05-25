<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Avatar;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\SettingsType;
use Symfony\Component\HttpFoundation\File\File;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class UserController
 * @package AppBundle\Controller
 *
 * @Route("/user")
 */

class UserController extends Controller
{
    /**
     * @Route("/settings", name="settings")
     * @Method({"GET", "POST"})
     */
    public function settingsAction(Request $request)
    {
        $user = $this->getUser();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Avatar');

        $avatar = $repository->findOneBy(
            array('user' => $user->getId())
        );

        $user->setName($user->getName());
        $user->setEmail($user->getEmail());
        $user->setAvatar($user->getAvatar());

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $form2 = $this->createForm(SettingsType::class, $avatar);
        $form2->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $name=$form['name']->getData();
            $user->setName($name);

            $mail=$form['email']->getData();
            $user->setEmail($mail);

            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'notice',
                'User changed'
            );

            if ($form2->isSubmitted() && $form2->isValid()) {

                $file = $avatar->getImg();

                $fileName = md5(uniqid()) . '.' . $file->guessExtension();

                $Name = '/uploads/avatars/'.$fileName;

                $file->move(
                    $this->getParameter('avatar_directory'),
                    $fileName
                );

                $avatar->setImg($Name);
                $avatar->setUser($user);

                $em = $this->getDoctrine()->getManager();

                $em->persist($avatar);
                $em->flush();

                $this->addFlash(
                    'notice',
                    'Avatar changed'
                );
            }

            return $this->redirect($this->generateUrl('dashboard'));
        }

        return $this->render('dashboard/settings.html.twig', array(
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'user' => $user
        ));
    }
    /**
     * @Route("/", defaults={"name" = -1})
     * @Route("/{name}", name="user")
     * @Method("GET")
     */
    public function userAction($name)
    {

        $user = null;

        if($name == -1){
            $user = $this->getUser();

            $lists = $user->getToLists();

            $userTeams = $user->getTeams();

            $todoCount = 0;

            $teams = array();
            $i=0;

            foreach  ($lists as $list)
            {
                $todos = $list->getTodos();
                $todoCount = $todoCount + count($todos);
            }

            foreach ($userTeams as $team){
                $teams[$i] = $team;
                $i++;
            }

        }else{

            $mainUser = $this->getUser();
            $em = $this->getDoctrine()->getManager();

            $user = $em->getRepository('AppBundle:User')->findOneBy(array( 'name' => $name ));

            $lists = $user->getToLists();

            $teams = $mainUser->getTeams();

            $todoCount = 0;

            foreach  ($lists as $list)
            {
                $todos = $list->getTodos();
                $todoCount = $todoCount + count($todos);
            }

        }

        return $this->render('dashboard/user.html.twig', array(
            'todo_count' => $todoCount,
            'user' => $user,
            'teams' => $teams
        ));
    }

    /**
     * @Route("/search", name="search3")
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