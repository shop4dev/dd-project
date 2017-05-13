<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\SettingsType;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @Route("/user", name="user")
 */
class UserController extends Controller
{
    /**
     * @Route("/", name="main_user")
     */
    public function userAction(Request $request)
    {
        $user = $this->getUser();

        $username = $user->getName();

        $email = $user->getEmail();

        $avatar = $user->getAvatar();

        return $this->render('profile/Default/user.html.twig', [
            'username' => $username,
            'email' => $email,
            'avatar' => $avatar
        ]);
    }

    /**
    * @Route("/avatar", name="avatar_new")
    */
    public function newAction(Request $request)
    {
        $avatar = $this -> getUser();
        $oldAvatar = $avatar->getAvatar();
        $form = $this->createForm(SettingsType::class, $avatar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $avatar->getAvatar();
            $fileName = $this->get('app.avatar_uploader')->upload($file);

            $avatar->setAvatar($fileName);

            return $this->redirect($this->generateUrl('main_user'));
        }

        return $this->render('profile/Default/avatar.html.twig', array(
            'form' => $form->createView(),
            'avatar' => $oldAvatar
        ));
    }

    /**
     * @Route("/search", name="search_user")
     */
    public function searchAction(Request $request)
    {
        $user = $this -> getUser();
        $search = $request->request->get('q');

        if($user->getName()==$search)
        {
            return $this->render('profile/Default/user.html.twig', array(

            ));
        }
        else{
            return $this->render('todos/index.html.twig', array(
                'username' => $search
            ));
        }
    }
}