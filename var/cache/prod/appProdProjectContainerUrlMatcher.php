<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // security_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'security_login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\TodoController::adminAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // welcome
            if ($pathinfo === '/profile') {
                return array (  '_controller' => 'AppBundle\\Controller\\TodoController::listAction',  '_route' => 'welcome',);
            }

            // todo_create_list
            if ($pathinfo === '/profile/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\TodoController::createListAction',  '_route' => 'todo_create_list',);
            }

            // todo_create
            if (0 === strpos($pathinfo, '/profile/create') && preg_match('#^/profile/create/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_create')), array (  '_controller' => 'AppBundle\\Controller\\TodoController::createAction',));
            }

            // todo_edit
            if (0 === strpos($pathinfo, '/profile/edit') && preg_match('#^/profile/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_edit')), array (  '_controller' => 'AppBundle\\Controller\\TodoController::editAction',));
            }

        }

        // todo_details
        if (0 === strpos($pathinfo, '/todo/details') && preg_match('#^/todo/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_details')), array (  '_controller' => 'AppBundle\\Controller\\TodoController::detailsAction',));
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // tolist_delete
            if (0 === strpos($pathinfo, '/profile/listdelete') && preg_match('#^/profile/listdelete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tolist_delete')), array (  '_controller' => 'AppBundle\\Controller\\TodoController::deleteListAction',));
            }

            // todo_delete
            if (0 === strpos($pathinfo, '/profile/delete') && preg_match('#^/profile/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_delete')), array (  '_controller' => 'AppBundle\\Controller\\TodoController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
