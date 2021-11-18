<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("What the fuck is talking this?");
    }
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = ['This is a test', 'This is a dummy answer', 'This is done'];
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
             ]
        );
    }
}
