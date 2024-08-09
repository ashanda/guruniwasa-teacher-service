<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemShopController extends Controller
{
    public function itemShop()
    {
        try{

            return view('web.item-shop.view');

        }catch(\Exception $exception){

            return;
        }
    }


  









}
