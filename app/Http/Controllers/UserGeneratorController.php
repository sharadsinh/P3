<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use Illuminate\Http\Request;


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

      //get the input from request
      $numberOfUsers=$request->input('numberOfUsers');
      $isBirthday=$request->input('addBirthday');
      $isProfile=$request->input('addProfile');

      //instantiate an array to store users detail
      $users=array();

      //run loop for number of users time
      for($i=0; $i<$numberOfUsers; $i++) {

        //userdata to store details of an individual. At each loop instantiate an empty array
        $userdata=array();

        //get name from faker
        $name = $faker->name;

        //add the name to userdata array
        array_push($userdata, $name);

        //if birthday checkbox selected get and add birthday as well
        if ($isBirthday=="on") {
          $birthdate = $faker->date($format = 'm-d-Y', $max='now');
          array_push($userdata, $birthdate);
        }

        //if profile checkbox selected get and add profile from faker
        if ($isProfile=="on") {
          $profile = $faker->paragraph($nbSentences=3);
          array_push($userdata, $profile);
        }

        //Add array of individual's detail to parent array.
        array_push($users, $userdata);
      }

      //return users array to view
      return view('usergenerator.createAndShow')->with('users', $users);

    }
  }
