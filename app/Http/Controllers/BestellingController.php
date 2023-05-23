<?php

namespace App\Http\Controllers;

use App\Models\BestellingItemTest;
use App\Models\MetadataTest;
use Illuminate\Http\Request;

class BestellingController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function join(){
//        return MetadataTest::all();

        return BestellingItemTest::joinRelationship('metadata_tests');

//        return BestellingItemTest::select('bestelling_item_tests.*')
//            ->join('metadata_tests', 'metadata_tests.orderid', '=', 'bestelling_id');


//            ->join('metadata_test', 'bestelling_item_test.bestelling_id', '=', 'metadata_test.order_id')
////            ->get();

        //bestelling_id = oederid

//        dd($bestellingen);
//            DB::table('bestelling_item_test')
//            ->join('metadata_test', 'bestelling_item_test.bestelling_id', '=', 'metadata_test.order_id')// joining the contacts table , where user_id and contact_user_id are same
//            ->select('bestelling_item_test.*', 'metadata_test.*')
//            ->get();


//        join('metadata_test', 'bestelling_item_test.bestelling_id', '=', 'metadata_test.order_id')
//            ->select('bestelling_item_test.*', 'metadata_test.*')
//            ->get();

//        return view('welcome', compact('bestellingen'));

    }

    public function total(){
        //orderValue bij elkaar optellen per dag  created at

        //DB::orderwaarde -> where(created_at) --> array van orderwaarde per dag
        //array_reduce($array, 'function') --> orderwaarde totaal per dag
    }

    public function average(){
        //array maken van orderwaarde
        //array_reduce($array, 'function') --> orderwaarde totaal

        //array_unique($array) van dates
        //array.length --> aantal dagen

        //orderwaarde totaal/aantal dagen
    }

    public function popular(){
        //aantal van hoog naar laag --> stoppen bij 10

        //array maken van aantal
        //arsort van array
        //array_splice($input, $offset)
    }
}
