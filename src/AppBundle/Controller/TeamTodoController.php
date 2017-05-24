<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ToList;
use AppBundle\Form\ListType;
use AppBundle\Form\ToDoType;
use AppBundle\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use AppBundle\Entity\Team;
use AppBundle\Entity\Todo;
use AppBundle\Entity\Members;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TeamTodoController
 * @package AppBundle\Controller
 *
 * @Route("/teams")
 */
class TeamTodoController extends Controller
{
    /**
     * @Route("/create/{id}", name="create_team_task")
     * @Method({"GET", "POST"})
     */
    public function createAction($id, Request $request)
    {
        $todo = new Todo();

        $form = $this->createForm(ToDoType::class, $todo);
        $form->handleRequest($request);

        $validator = $this->get('validator');
        $errors = $validator->validate($todo);

        if($form->isSubmitted() && $form->isValid())
        {
            $name = $form['name']->getData();
            $category= $form['category']->getData();
            $description= $form['description']->getData();
            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');

            $tolist = $this->getDoctrine()
                ->getRepository('AppBundle:ToList')
                ->find($id);

            $todo->setName($name);
            $todo->setCategory($category);
            $todo->setDescription($description);
            $todo->setDueDate($due_date);
            $todo->setCreateDate($now);
            $todo->setToList($tolist);

            $em = $this->getDoctrine()->getManager();

            $em->persist($todo);
            $em->flush();

            return $this->redirectToRoute('teams_list');
        }

        return $this->render('task/create.html.twig', array(
            'form' => $form->createView(),
            'errors' => $errors
        ));

    }
    /**
     * @Route("/edit/{id}", name="edit_team_task")
     * @Method({"GET", "POST"})
     */
    public function editAction($id, Request $request)
    {
        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);

        $todo->setName($todo->getName());
        $todo->setCategory($todo->getCategory());
        $todo->setDescription($todo->getDescription());
        $todo->setDueDate($todo->getDueDate());

        $form = $this->createForm(ToDoType::class, $todo);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //Get Date
            $name = $form['name']->getData();
            $category= $form['category']->getData();
            $description= $form['description']->getData();
            $due_date = $form['due_date']->getData();

            $em = $this->getDoctrine()->getManager();
            $todo = $em->getRepository('AppBundle:Todo')->find($id);

            $todo->setName($name);
            $todo->setCategory($category);
            $todo->setDescription($description);
            $todo->setDueDate($due_date);

            $em->flush();

            echo "<script>window.close();</script>";
        }

        return $this->render('task/edit.html.twig', array(
            'todo' => $todo,
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/details_todo/{id}", name="task_team_details")
     * @Method("GET")
     */
    public function detailsAction($id)
    {
        $todo = $this->getDoctrine()
            ->getRepository('AppBundle:Todo')
            ->find($id);

        return $this->render('task/details.html.twig', array(
            'todos' => $todo
        ));
    }
    /**
     * @Route("/delete_todo/{id}", name="team_task_delete")
     * @Method({"GET"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $todo = $em->getRepository('AppBundle:Todo')->find($id);

        $em->remove($todo);
        $em->flush();

        return $this->redirectToRoute('dashboard');
    }
}
