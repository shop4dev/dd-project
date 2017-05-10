<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
//use Doctrine\DBAL\Types\DateTimeType;
//use Doctrine\DBAL\Types\TextType;
use AppBundle\Entity\ToList;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TodoController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    /**
     * @Route("/profile", name="welcome")
     */
    public function listAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findAll();

        $allTodos = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->findAll();

        $user = $this->getUser();

        $lists = $user->getToLists();

        $data = array();

        $todoCount = 0;

        foreach  ($lists as $list)
        {
            $todos = $list->getTodos();
            $todoCount = $todoCount + count($todos);
            $data[$list->getId()] = $todos;
        }
        $time = new \DateTime();

        return $this->render('profile/Default/index.html.twig', array(
            'todo_count' => $todoCount,
            'user_count' => count($users),
            'all_count' => count($allTodos),
            'lists' => $lists,
            'data' => $data,
            'time' => $time,
            'avatar' => $user->getAvatar()
        ));
    }
    /**
     * @Route("/profile/list", name="todo_create_list")
     */
    public function createListAction(Request $request)
    {
        $tolist = new ToList();

        $form = $this->createFormBuilder($tolist)
            ->setMethod('POST')
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create List', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

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

            return $this->redirectToRoute('todo_create_list');
        }

        if (count($errors) > 0) {
            return $this->render('todo/create.html.twig', array(
                'form' => $form->createView(),
                'errors' => $errors,
            ));
        }

        /*return $this->render('todo/create.html.twig', array(
            'form' => $form->createView(),
        ));*/
    }
    /**
     * @Route("/profile/create/{id}", name="todo_create")
     */
    public function createAction($id, Request $request)
    {
        $todo = new Todo();

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Create Todo', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);
        $validator = $this->get('validator');
        $errors = $validator->validate($todo);

        if($form->isSubmitted() && $form->isValid())
        {
            $name = $form['name']->getData();
            $category= $form['category']->getData();
            $description= $form['description']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');

            $tolist = $this->getDoctrine()
                ->getRepository('AppBundle:ToList')
                ->find($id);

            $todo->setName($name);
            $todo->setCategory($category);
            $todo->setDescription($description);
            $todo->setPriority($priority);
            $todo->setDueDate($due_date);
            $todo->setCreateDate($now);
            $todo->setToList($tolist);
            $todo->setProgress('100');
            $todo->setStatus(0);

            $em = $this->getDoctrine()->getManager();

            $em->persist($todo);
            $em->flush();

            $this->addFlash(
                'notice',
                'Todo Added'
            );
            echo "<script>window.close();</script>";
            //return $this->redirectToRoute('welcome');
        }

            return $this->render('todo/create.html.twig', array(
                'form' => $form->createView(),
                'errors' => $errors,
            ));

    }
    /**
     * @Route("/profile/edit/{id}", name="todo_edit")
     */
    public function editAction($id, Request $request)
    {
        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);

        $now = new\DateTime('now');

        $todo->setName($todo->getName());
        $todo->setCategory($todo->getCategory());
        $todo->setDescription($todo->getDescription());
        $todo->setPriority($todo->getPriority());
        $todo->setDueDate($todo->getDueDate());
        //$todo->setCreateDate($now);

        $form = $this->createFormBuilder($todo)
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('priority', ChoiceType::class, array('choices' => array('Low' => 'Low', 'Normal' => 'Normal', 'High' => 'High'), 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('progress', ChoiceType::class, array('choices' => array('0%' => '0%', '10%' => '10%', '20%' => '20%', '30%' => '30%',
                '40%' => '40%', '50%' => '50%', '60%' => '60%', '70%' => '70%', '80%' => '80%', '90%' => '90%', '100%' => '100%'),
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Update Todo', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //Get Date
            $name = $form['name']->getData();
            $category= $form['category']->getData();
            $description= $form['description']->getData();
            $priority = $form['priority']->getData();
            $due_date = $form['due_date']->getData();
            $progress = $form['progress']->getData();

            //$now = new\DateTime('now');

            $em = $this->getDoctrine()->getManager();
            $todo = $em->getRepository('AppBundle:Todo')->find($id);

            $todo->setName($name);
            $todo->setCategory($category);
            $todo->setDescription($description);
            $todo->setPriority($priority);
            $todo->setDueDate($due_date);
            //$todo->setCreateDate($now);
            $todo->setProgress($progress);
            
            if($progress==="100%")
            {
                $todo->setStatus("Completed");
            }
            elseif ($progress!="0%")
            {
                $todo->setStatus("In progress");
            }

            $em->flush();

            $this->addFlash(
                'notice',
                'Todo Changed'
            );

            echo "<script>window.close();</script>";
        }

        return $this->render('todo/edit.html.twig', array(
            'todo' => $todo,
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/todo/details/{id}", name="todo_details")
     */
    public function detailsAction($id)
    {
        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);
        return $this->render('todo/details.html.twig', array(
            'todo' => $todo
        ));
    }
    /**
     * @Route("/profile/listdelete/{id}", name="tolist_delete")
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

        return $this->redirectToRoute('welcome');
    }
    /**
     * @Route("/profile/delete/{id}", name="todo_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $todo = $em->getRepository('AppBundle:Todo')->find($id);

        $em->remove($todo);
        $em->flush();

        $this->addFlash(
            'notice',
            'Todo Removed'
        );

        return $this->redirectToRoute('welcome');
    }
}
