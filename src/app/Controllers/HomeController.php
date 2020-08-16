<?php
namespace App\Controllers;
use Slim\Views\Twig as View;
class HomeController 
{
   protected $views;
   public function __construct(View $views)
   {
       return $this->view = $views;
   }
   public function index($request, $response)
   {
      return $this->view->render($response, 'home.twig');
   }
}
?>