<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use function Couchbase\defaultDecoder;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $myHouse1 = new MyHouse1();
        $myHouse2 = new MyHouse2();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nbrHouse1 = intval($_POST['myHouse1']);
            $nbrHouse2 = intval($_POST['myHouse2']);
            $myHouse1 = $myHouse1->generate($nbrHouse1);
            $myHouse2 = $myHouse2->generate($nbrHouse2);

        } else{
            $nbrHouse1 = 0;
            $nbrHouse2 = 0;
        }

        return $this->twig->render('Home/index.html.twig',[
            'myHouses1'  => $myHouse1,
            'nbrHouse1' => $nbrHouse1,
            'myHouses2'  => $myHouse2,
            'nbrHouse2' => $nbrHouse2,
        ]);
    }
}
