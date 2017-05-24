<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ToList;
use AppBundle\Form\ListType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
     * @Method({"GET", "POST"})
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

            echo "<script>window.opener.location.reload();window.close();</script>";
        }

        if (count($errors) > 0) {
            return $this->render('task/create.html.twig', array(
                'form' => $form->createView(),
                'errors' => $errors,
                'path' => 'create_list'
            ));
        }
    }
    /**
     * @Route("/delete/{id}", name="delete_list")
     * @Method({"GET"})
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