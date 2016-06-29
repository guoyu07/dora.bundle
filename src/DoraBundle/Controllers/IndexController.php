<?php

namespace DoraBundle\Controllers;

use FastD\Framework\Bundle\Controllers\Controller;

/**
 * @Route("/dorabundle")
 */
class IndexController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->response('hello world');
    }
}