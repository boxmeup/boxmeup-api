<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$app->get('/', function () use ($app) {
    return $app->json(['ping' => 'pong']);
})->bind('homepage');

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
        return $app->json([
            'type' => get_class($e),
            'message' => $e->getMessage()
        ], $code ?: 404);
});
