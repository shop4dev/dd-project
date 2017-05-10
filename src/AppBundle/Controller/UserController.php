<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\AvatarChange;
use Symfony\Component\HttpFoundation\File\File;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function userAction(Request $request)
    {
        return $this->render('profile/Default/user.html.twig');
    }

    /**
    * @Route("/user/avatar", name="avatar_new")
    */
    public function newAction(Request $request)
    {
        $avatar = $this -> getUser();
        $form = $this->createForm(AvatarChange::class, $avatar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $avatar->getAvatar();
            $fileName = $this->get('app.avatar_uploader')->upload($file);

            $avatar->setAvatar($fileName);

            return $this->redirect($this->generateUrl('user'));
        }

        return $this->render('profile/Default/avatar.html.twig', array(
        'form' => $form->createView(),
        ));
    }
}