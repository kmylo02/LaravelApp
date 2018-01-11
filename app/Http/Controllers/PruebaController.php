<?php

namespace Cinema\Http\Controllers;

class PruebaController extends Controller {

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index() {
    return "Hola desde controller";
  }

  public function nombre($nombre) {
    return "Hola desde controller, mi nombre es: " . $nombre;
  }

}
