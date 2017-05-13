<?php
namespace AppBundle\Controller;

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
        $form = $this->createForm(SettingsType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $user->getAvatar();
            $fileName = $this->get('app.avatar_uploader')->upload($file);

            $user->setAvatar($fileName);

            return $this->redirect($this->generateUrl('main_user'));
        }

        return $this->render('dashboard/settings.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/", defaults={"name" = -1})
     * @Route("/{name}", name="user")
     * @Method("GET")
     */
    public function userAction($name)
    {

        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->findOneBy(
            array('name' => $name)
        );

//        if($user == null){
//            $user = $this->getUser();
//        }

        $lists = $user->getToLists();

        $todoCount = 0;

        foreach  ($lists as $list)
        {
            $todos = $list->getTodos();
            $todoCount = $todoCount + count($todos);
        }

        return $this->render('dashboard/user.html.twig', array(
            'todo_count' => $todoCount,
            'user' => $user
        ));
    }

}