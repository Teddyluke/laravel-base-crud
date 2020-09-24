<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// mi tiro dentro la classe che voglio utilizzare (il models pagante)
use App\Pagante;

class PaganteController extends Controller
{

  public function index() {
    // mi tiro dentro tutti i paganti dal database
    $paganti = Pagante::all();

    // var_dump($paganti); die(); <- Per check se funziona il collegamento

    // con la compact mi porto gli ospiti nel frontend in paganti.blade.php
    return view('paganti', compact('paganti'));

  }
}
