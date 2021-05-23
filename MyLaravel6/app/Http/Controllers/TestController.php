<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class TestController extends Controller
{
  public function element($index) {
          $data = [
          ];
          $elem = $data[$index];
          return view('pages.element', compact('elem', 'data'));
      }
      public function home() {
        $movies = Movie::all();
        dd($movies);
        return view('pages.home');
      }
}
