<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/lucky")
 */
class LuckyController extends Controller
{
    /**
     * @Route("/number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        echo 1;
        echo 2;
        echo 3;
        echo "two";
        echo "three";

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}
