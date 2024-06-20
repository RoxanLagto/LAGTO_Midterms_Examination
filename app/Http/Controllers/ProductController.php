<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function restaurant(){

        $data = [
            'resto1' => 'Sizzling Plate',
            'resto2' => 'Manam',
            'resto3' => 'Kuya J',
            'resto4' => 'Botejyu',
            'resto5' => 'Tea House',
            'resto6' => 'Grumpy Joe',
            'resto7' => 'Le Chef',
            'resto8' => 'Mesa',
            'resto9' => 'Vikings',
            'resto10' => 'Hill Station'];

        return view('resto', ['data' => $data]);
    }
}
