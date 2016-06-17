<?php
/**
 * Created by PhpStorm.
 * User: karolina
 * Date: 16.06.16
 * Time: 20:38
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public  function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}