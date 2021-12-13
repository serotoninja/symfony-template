<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/template")
 */
class TemplateController extends AbstractController
{
    /**
     * @Route("/", name="template_index")
     */
    public function index(): Response
    {
        return $this->render('template/index.html.twig', [
            'action_name' => $this->humanizeValue(__METHOD__),
        ]);
    }

    /**
     * @Route("/foo", name="template_foo")
     */
    public function foo(): Response
    {
        return $this->render('template/example.html.twig', [
            'action_name' => $this->humanizeValue(__METHOD__),
        ]);
    }

    /**
     * @Route("/bar", name="template_bar")
     */
    public function bar(): Response
    {
        return $this->render('template/example.html.twig', [
            'action_name' => $this->humanizeValue(__METHOD__),
        ]);
    }

    protected function humanizeValue(string $value): string
    {
        $array = explode('\\', $value);
        return array_pop($array);
    }

}
