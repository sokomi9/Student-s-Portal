<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stdgrade;

class StdgradesController extends Controller
{

    function showGrades(){
       // $stdgrades = Stdgrade::where('first_name','Ray')->delete();
       $stdgrades = Stdgrade::where('first_name','Abiud')->update(['english'=>'A']);
        $stdgrades = Stdgrade::first();
        $stdgrades=[$stdgrades];
        return view('mygrades', ['grademe'=>$stdgrades]);
    }
}
