<?php
/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 9/07/17
 * Time: 16:02
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function index()
    {
        return new Response('Hi!');
    }

}