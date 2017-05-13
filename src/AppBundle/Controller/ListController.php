<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ToList;
use AppBundle\Form\ListType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ListController
 * @package AppBundle\Controller
 *
 * @Route("/list")
 */
class ListController extends Controller
{
    /**
     * @Route("/create", name="create_list")
     */
    public function createListAction(Request $request)
    {
        $tolist = new ToList();

        $form = $this->createForm(ListType::class, $tolist);
        $form->handleRequest($request);

        $validator = $this->get('validator');
        $errors = $validator->validate($tolist);

        if($form->isSubmitted() && $form->isValid())
        {
            $user = $this->getUser();

            $name = $form['name']->getData();

            $tolist->setName($name);
            $tolist->setUser($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($tolist);
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'notice',
                'List Added'
            );

            return $this->redirectToRoute('dashboard');
        }

        if (count($errors) > 0) {
            return $this->render('task/create.html.twig', array(
                'form' => $form->createView(),
                'errors' => $errors,
            ));
        }
    }
    /**
     * @Route("/delete/{id}", name="delete_list")
     */
    public function deleteListAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('AppBundle:ToList')->find($id);

        $em->remove($list);
        $em->flush();

        $this->addFlash(
            'notice',
            'List Removed'
        );

        return $this->redirectToRoute('dashboard');
    }
}