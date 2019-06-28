<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        return new Response('<span style="font-size: xx-large">k8s + Helm + Symfony 😄🎉</span>');
    }
}
