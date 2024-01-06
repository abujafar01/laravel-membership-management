<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class PagesController extends Controller
{
    public function posts()
    {  //single data in controller
        //$name = "Ayesha";
        //$age = 20;


        //return 'Name: '. $name  .'Age: '.$age;


        //object
        // $user = new stdClass();
        // $user->name= "Ayesha";
        // $user->age= 20;
        // $user->age= 20;
        // $user->gender= 'Male';
        // print_r($user);

        //multiple Data / Array
        $posts = [];
        $singlePost = new stdClass();
        $singlePost->name = "Ayesha";
        $singlePost->age = 20;
        $singlePost->gender ='Female';
        // [
        //     'id' => 1,
        //     'title' => 'Simple Title',
        //     'total_view' => 100,
        // ];
        array_push($posts, $singlePost);

        $singlePost = new stdClass();
        $singlePost->name = "Shobuj";
        $singlePost->age = 30;
        $singlePost->gender ='Male';
        array_push($posts, $singlePost);

        print_r($posts);
    }

    public function postsView()
    {
        //single data in controller
        $name = "Ayesha";
        $age = 20;

        //return view('posts', compact('name', 'age'));
        //return view('posts')->with('name', $name)->with('age', $age);

        // $user = new stdClass();
        // $user->name= "Ayesha";
        // $user->age= 20;
        // $user->gender= 'Male';
        //return view('posts', compact('user'));

        $posts = [];
        $singlePost = new stdClass();
        $singlePost->id = 1;
        $singlePost->title = "Simple Post 1";
        $singlePost->description ='lorem ipsum dolor site amet consectetur adipisicing elit.Ullam pariantur Possimus veniam dolorum totam eligendi aperiam perspicantis consequatur reprehendentg quas atque molestias quam vitae libero incidunt nihil in quae ipsum';
        $singlePost->total_view ='20';
        array_push($posts, $singlePost);


        $singlePost = new stdClass();
        $singlePost->id = 2;
        $singlePost->title = "Simple Post 2";
        $singlePost->description ='lorem ipsum dolor site amet consectetur adipisicing elit.Ullam pariantur Possimus veniam dolorum totam eligendi aperiam perspicantis consequatur reprehendentg quas atque molestias quam vitae libero incidunt nihil in quae ipsum';;
        $singlePost->total_view ='200';
        array_push($posts, $singlePost);


        $singlePost = new stdClass();
        $singlePost->id = 3;
        $singlePost->title = "Simple Post 3";
        $singlePost->description ='lorem ipsum dolor site amet consectetur adipisicing elit.Ullam pariantur Possimus veniam dolorum totam eligendi aperiam perspicantis consequatur reprehendentg quas atque molestias quam vitae libero incidunt nihil in quae ipsum';;
        $singlePost->total_view ='300';
        array_push($posts, $singlePost);
        return view('posts', compact('posts'));
    }
}
