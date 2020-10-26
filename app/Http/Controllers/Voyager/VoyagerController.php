<?php

namespace App\Http\Controllers\Voyager;

use App\Devis;
use App\Models\User;
use Illuminate\Support\Arr;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;

class VoyagerController extends BaseVoyagerController
{
    public function index()
    {
        $countConditions = [
//            ["created_at","<",now()->add(-5,"days")]
        ];
        $counts = [
            [
                "title"=>"Total devis",
                "count"=>Devis::where($countConditions)->count(),
                "link"=>"/dashboard/devis"
            ],
            [
                "title"=>"Devis (interested)",
                "count"=>Devis::where(array_merge($countConditions,["interested"=>0]))->count(),
                "link"=>"/dashboard/devis?key=interested&filter=equals&s=1"
            ],
            [
                "title"=>"Devis (non interested)",
                "count"=>Devis::where(array_merge($countConditions,["interested"=>1]))->count(),
                "link"=>"/dashboard/devis?key=interested&filter=equals&s=0"
            ],
            [
                "title"=>"Total users",
                "count"=>User::where($countConditions)->count(),
                "link"=>"/dashboard/users"
            ]
        ];


        return Voyager::view('voyager::index',[
            "counts"=>$counts
        ]);
    }
}
