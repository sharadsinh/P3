<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class LoremIpsumController extends Controller {

  public function getCreate() {
    return view('loremipsum.create');
  }

  public function postCreate($paragraphs=null) {

    $generator = new Generator();
    $paragraphs = $generator->getParagraphs($_POST['number']);
    return view('loremipsum.createAndShow')->with('paragraphs', $paragraphs);
  }
}
