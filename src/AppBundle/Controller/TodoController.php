<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Todo;
use AppBundle\Entity\ToList;
use AppBundle\Form\ListType;
use AppBundle\Form\ToDoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Form\SettingsType;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class TodoController
 * @package AppBundle\Controller
 *
 * @Route("/dashboard")
 */
class TodoController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     * @Method("GET")
     */
    public function listAction(Request $request)
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

        return $this->render('dashboard/index.html.twig', array(
            'todo_count' => $todoCount,
            'user_count' => count($users),
            'all_count' => count($allTodos),
            'lists' => $lists,
            'data' => $data,
            'time' => $time,
            'user' => $user
        ));
    }
    /**
     * @Route("/create/{id}", name="create_task")
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

            $this->addFlash(
                'notice',
                'Todo Added'
            );
            echo "<script>window.opener.location.reload();window.close();</script>";
        }

            return $this->render('task/create.html.twig', array(
                'form' => $form->createView(),
                'errors' => $errors
            ));

    }
    /**
     * @Route("/edit/{id}", name="edit_task")
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

            $this->addFlash(
                'notice',
                'Todo Changed'
            );

            echo "<script>window.opener.location.reload();window.close();</script>";
        }

        return $this->render('task/edit.html.twig', array(
            'todo' => $todo,
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/details/{id}", name="task_details")
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
     * @Route("/delete/{id}", name="task_delete")
     * @Method({"GET"})
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

        return $this->redirectToRoute('dashboard');
    }

    /**
     * @Route("/search", name="search1")
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
