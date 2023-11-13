<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function home ()
    {
        return view('seller.home');
    }

    public function profile(User $user) {

        return view('seller.profile', compact('user'));
    }

    public function services ()
    {
        //  
    }

    public function analytics ()
    {
        //  
    }

    public function chats ()
    {
        //  
    }

    public function contacts ()
    {
        //  
    }

    public function wishlist ()
    {
        //  
    }

    public function show ()
    {
        //  
    }

}
