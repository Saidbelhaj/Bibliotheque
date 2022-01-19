<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
  // This is an action, the function that gives you the content for
  //your page
    /**
     * @Route("/", name="index_route")
     */
  public function index()
  {
    $hello = 'hello word';

    return $this->render(
      'index.html.twig',
      array('hello' => $hello)
    );
  }
}
