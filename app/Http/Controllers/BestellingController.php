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

    public function total(){
        //orderValue bij elkaar optellen per dag  created at

        $orderValue = MetadataTest::select('orderValue')
            ->get();

        $orderValueArray = $orderValue->pluck('orderValue')->toArray();
        $orderValueInt = array_map('intval', $orderValueArray);
        $totalOrderValue = array_sum($orderValueInt);
        $totalOrderValue *= 10; //ik heb de dagen niet meer kunnen doen door tijdgebrek ivm school. Ik heb nu even de bestellingen per dag op 10 gesteld.

        return view('welcome', compact('totalOrderValue'));
    }

    public function average()
    {

        $orderValue = MetadataTest::select('orderValue')
            ->get();

        $orderValueArray = $orderValue->pluck('orderValue')->toArray();
        $orderValueInt = array_map('intval', $orderValueArray);
        $averageOrderValue = array_sum($orderValueInt);
        $averageOrderValue /= 25; //ik had ook geen tijd meer om hier de dagen te gebruiken. Ik heb ze voor nu op 25 gesteld.

        return view('welcome', compact('averageOrderValue'));

    //hieronder heb ik wel code gemaakt om door de bestellingen op een dag te loopen, maar die heb ik dus niet meer kunnen gebruiken.
//        $startDate = '2022-03-07';
//        $endDate = '2022-03-07 23:59:59';
//
//        $dates = DB::table('metadata_tests')
//            ->whereBetween('created_at', [$startDate, $endDate])
//            ->get();
//
//        foreach ($dates as $date) {
//            $createdAt = $date->created_at;
//            echo $createdAt . "\n";
//        }
    }

        public function popular()
        {
            //aantal van hoog naar laag --> stoppen bij 10

            $itemCount = MetadataTest::select('itemCount')
                ->get();

            $itemCountArray = $itemCount->pluck('itemCount')->toArray();
            rsort($itemCountArray);
            $popularArray = array_slice($itemCountArray, 0, 10);

            return view('welcome', compact('popularArray'));
        }
}
