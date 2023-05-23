<?php

namespace App\Http\Controllers;

use App\Models\Bestelling_item_test;
use Illuminate\Http\Request;

class BestellingController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function join(){
        $bestellingId = Bestelling_item_test::all();

//            DB::table('bestelling_item_test')
//            ->join('metadata_test', 'bestelling_item_test.bestelling_id', '=', 'metadata_test.order_id')// joining the contacts table , where user_id and contact_user_id are same
//            ->select('bestelling_item_test.*', 'metadata_test.*')
//            ->get();


//        join('metadata_test', 'bestelling_item_test.bestelling_id', '=', 'metadata_test.order_id')
//            ->select('bestelling_item_test.*', 'metadata_test.*')
//            ->get();

        return view('welcome', compact('bestellingId'));

    }

    public function total(){
        //orderValue bij elkaar optellen per dag  created at
    }

    public function average(){
        //orderwaarde totaal/aantal dagen
    }

    public function popular(){
        //aantal van hoog naar laag --> stoppen bij 10
    }
}
