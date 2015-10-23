<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
// use Illuminate\Support\MessageBag;

class UserGeneratorController extends Controller {

  public function getCreate() {
    return view('usergenerator.create');
  }

  public function postCreate(Request $request) {
    // Validate the request data
    $this->validate($request, [
        'numberOfUsers' => 'required|numeric|max:99|min:0',
    ]);

    $faker = Faker::create();

    $numberOfUsers=$request->input('numberOfUsers');
    $isBirthday=$request->input('addBirthday');
    $isProfile=$request->input('addProfile');

    debug($isBirthday, $isProfile);
    $users=array();

    for($i=0; $i<$numberOfUsers; $i++) {
      $userdata=array();
      $name = $faker->name;
      array_push($userdata, $name);

      if ($isBirthday=="on") {
        $birthdate = $faker->date($format = 'm-d-Y', $max='now');
        array_push($userdata, $birthdate);
      }

      if ($isProfile=="on") {
        $profile = $faker->paragraph($nbSentences=3);
        array_push($userdata, $profile);
      }
      array_push($users, $userdata);
    }
    debug($users);
    return view('usergenerator.createAndShow')->with('users', $users);

    // foreach($users as $avalue) {
    //   foreach($avalue as $value) {
    //     echo $value;
    //   }
    // }
  }
}
