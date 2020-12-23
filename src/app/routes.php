<?php
$app->get("/", function ($request, $response) {
   return $this->view->render($response, "control.twig");
});
$app->get("/login", function ($request, $response) {
   return $this->view->render($response, "login.twig");
});
$app->post("/home", function ($request, $response) {
   return $this->view->render($response, "home.twig");
});
$app->get("/new", "HomeController:index");
$app->post("/loginAuth", "ApiLogin:auth");
$app->get("/runVideo", "RunVideo:run");
$app->get("/closeVideo", "RunVideo:close");
?>