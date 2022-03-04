<?php

use App\Models\Rent;

function readDataBase()
{
    $dataBaseInfo = Rent::all();
    return $dataBaseInfo;
}
