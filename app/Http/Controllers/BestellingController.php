<?php

namespace App\Http\Controllers;

use App\Models\BestellingItemTest;
use App\Models\MetadataTest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BestellingController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function join(){
//        return MetadataTest::all();

//        return BestellingItemTest::joinRelationship('metadata_tests');

        return BestellingItemTest::select('bestelling_item_tests.*')
            ->join('metadata_tests', 'metadata_tests.orderid', '=', 'bestelling_id')
            ->get();


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

        $orderValue = MetadataTest::select('orderValue')
            ->get();

        $orderValueArray = $orderValue->pluck('orderValue')->toArray();

        $orderValueInt = array_map('intval', $orderValueArray);

        $totalOrderValue = array_sum($orderValueInt);

//        dd($totalOrderValue);


        //DB::orderwaarde -> where(created_at) --> array van orderwaarde per dag
        //array_sum($array, 'function') --> orderwaarde totaal per dag
    }

    public function average(){

        $orderValue = MetadataTest::select('orderValue')
            ->get();

        $orderValueArray = $orderValue->pluck('orderValue')->toArray();

        $orderValueInt = array_map('intval', $orderValueArray);

        $totalOrderValue = array_sum($orderValueInt);

        //        dd($totalOrderValue);


        $dates = DB::table('metadata_tests')
            ->whereBetween('created_at', ['2022-03-17', '2022-03-17 23:59:59'])
            ->get();

        dd($dates);


//        $datesArray = $dates->toArray();

//        $uniqueArray = array_unique($datesArray);
        //array_unique($array) van dates
        //array.length --> aantal dagen

        //orderwaarde totaal/aantal dagen
    }

    public function popular(){
        //aantal van hoog naar laag --> stoppen bij 10

        $itemCount = MetadataTest::select('itemCount')
            ->get();

        $itemCountArray = $itemCount->pluck('itemCount')->toArray();

        rsort($itemCountArray); // Sort the array in descending order

        $popularArray = array_slice($itemCountArray, 0, 10);

        dd($popularArray);

        //array maken van aantal
        //arsort van array
        //array_splice($input, $offset)
    }
}
