<?php

namespace App\Controller;

use stdClass;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
$author = "Louis Lane";
$article =new stdClass();
$article->title ='thérie du complot';
$article -> intro ='Fascine depuis des lustres, on vous racontes ';
$article -> content = ' bla bla   bla ... ';

$user = new stdClass();
$user -> isConnected = TRUE;

$games =["Jeux ","Jeux2","Jeux3"];
$games2 =[
    ["titre" => "Jeux 1",
    "nbJoueur" => 12],
    ["titre" =>"Jeux 2",
    "nbJoueur" => 3]
];



return $this->render ('home/index.html.twig', [
    'truc' => "page d'acCCueil",
    'article' => $article,
    'auteur' => $author,
    'user'=> $user,
    'games'=> $games2]
);


// 
        //on cree une nouvelle variable truc et on lui affect un valeur HomePage . Les valeur sont dans un tableau 
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'truc'=>'HomePage !!',
            'toto'=> 'la tete à toto ! '
        ]);
    }
}
