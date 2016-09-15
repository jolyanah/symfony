<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 15/09/2016
 * Time: 10:09
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Dump\Container;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number", name="lucky_rout")
     */
    public function numberAction()
    {

        $number = mt_rand(0, 100);


        return $this->render('lucky/number.html.twig', array(
            'number'=>$number,
        ));


        /*
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
        */
    }
}