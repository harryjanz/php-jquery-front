<?php

$app->get('/login', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/login' route");
    return $this->renderer->render($response, 'login.phtml', $args);
});

$app->get('/recuperarsenha', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/recuperarsenha' route");
    return $this->renderer->render($response, 'recuperarsenha.phtml', $args);
});

$app->get('/redefinirsenha', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/redefinirsenha' route");
    return $this->renderer->render($response, 'redefinirsenha.phtml', $args);
});

// Usuário group
$app->group('/usuario', function () use ($app) {

    $app->get('/listar', function ($request, $response, $args) {
        $this->logger->info("Slim-Skeleton '/usuario/listar' route");
        $args['modulo'] = 'Usuário';
        $args['acao'] = 'Listar';
        $args['folder'] = '../../';
        return $this->renderer->render($response, 'usuario-listar.phtml', $args);
    });

    $app->get('/cadastro', function ($request, $response, $args) {
        $this->logger->info("Slim-Skeleton '/usuario/cadastro' route");
        $args['modulo'] = 'Usuário';
        $args['acao'] = 'Cadastro';
        $args['folder'] = '../../';
        return $this->renderer->render($response, 'usuario.phtml', $args);
    });

});

$app->get('/[{name}]', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});
