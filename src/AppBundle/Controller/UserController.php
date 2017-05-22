<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Avatar;
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

        $form = $this->createForm(SettingsType::class, $avatar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $avatar->getImg();

            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('avatar_directory'),
                $fileName
            );

            $avatar->setImg($fileName);
            $avatar->setUser($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($avatar);
            $em->flush();


            $this->addFlash(
                'notice',
                'Avatar changed'
            );

            return $this->redirect($this->generateUrl('settings'));
        }

        return $this->render('dashboard/settings.html.twig', array(
            'form' => $form->createView(),
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

        if($name == null){
            $user = $this->getUser();

            $lists = $user->getToLists();

            $todoCount = 0;

            foreach  ($lists as $list)
            {
                $todos = $list->getTodos();
                $todoCount = $todoCount + count($todos);
            }
        }else{

            $em = $this->getDoctrine()->getManager();

            $user = $em->getRepository('AppBundle:User')->findOneBy(array( 'name' => $name ));

            $lists = $user->getToLists();

            $todoCount = 0;

            foreach  ($lists as $list)
            {
                $todos = $list->getTodos();
                $todoCount = $todoCount + count($todos);
            }
        }

        return $this->render('dashboard/user.html.twig', array(
            'todo_count' => $todoCount,
            'user' => $user
        ));
    }

    /**
     * @Route("/search", name="search")
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