<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TasksController extends Controller
{
    /**
    * @Route("/", name="tasks")
    */
    public function tasksAction(Request $request)
    {
        return $this->render('tasks/index.html.twig');
    }
}