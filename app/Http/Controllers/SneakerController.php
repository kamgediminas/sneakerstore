<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sneaker; //uses model to connect to db;

class SneakerController extends Controller
{
    public function index(){
        $sneakers = Sneaker::orderBy('id', 'desc')->get(); //orders by
        // orders by latest
        
        return view('sneakers.index', ['sneakers' => $sneakers]);
    }

    public function index_ordered($parameter, $order){
        $sneakers = Sneaker::orderBy($parameter, $order)->get(); //orders by
        return view('sneakers.index', ['sneakers' => $sneakers]);
    }


    public function index_admin(){
        $sneakers = Sneaker::orderBy('created_at', 'desc')->get(); //orders by
        return view('sneakers.index_admin', ['sneakers' => $sneakers]);
    }


    public function show($id){

        $sneaker = Sneaker::findOrFail($id);
        // finds by id from table n inserts onto var 

        return view('sneakers.show', ['sneaker' => $sneaker]);
    }


    public function create(){
        $dir = 'img/item/';
        $items = scandir($dir);
        $items = array_diff($items, array('.', '..'));
        return view('sneakers.create', ['items' => $items]);
    }


    public function store(){
        $sneaker = new Sneaker();
        $sneaker->make = request('make');
        $sneaker->model = request('model');
        $sneaker->price = request('price');
        $sneaker->photo = request('photo');
        $sneaker->gender = 'm';
        $sneaker->save();
        return redirect('/sneakers_admin')->with('mssg', 'Inserted successfully');
    }

    public function destroy($id) {
        $sneaker = Sneaker::findOrFail($id);
        $sneaker->delete();
        //deletes one snk
        return redirect('/sneakers_admin');
    }
}
