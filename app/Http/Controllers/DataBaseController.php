<?php

namespace App\Http\Controllers;

//use App\Models\Rent;
//use DataBase;
//use Illuminate\Http\Request;

class DataBaseController extends Controller
{
    public function index()
    {
        return view('table');
    }

    /*public function addRent()
    {
        $dateCurrent = date("y:m:d");
        $timeCurrent = time();
        $rent = new Rent();
        $rent->personName = "Pepe";
        $rent->paymentAmount = 1500;
        $rent->startTime = "12:10:25";
        $rent->endTime = "16:10:25";
        $rent->startDate = $dateCurrent; //"2022:10:25";
        $rent->endDate = "2022:10:25";
        $rent->save();
    }*/
}
