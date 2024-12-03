<?php

namespace App\Http\Controllers;

use DB;
use View;

use Session;
use App\User;
use App\Banner;
use App\orders;
use App\inquiry;
use App\Product;
use App\Program;
use App\imagetable;
use App\newsletter;

use App\orders_products;
use Illuminate\Http\Request;
use App\Http\Traits\HelperTrait;

class GuestController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // use Helper;

    public function __construct()
    {
        $this->middleware('guest');
        $logo = imagetable::select('img_path')
            ->where('table_name', '=', 'logo')
            ->first();

        $favicon = imagetable::select('img_path')
            ->where('table_name', '=', 'favicon')
            ->first();

        View()->share('logo', $logo);
        View()->share('favicon', $favicon);
    }

    public function signin()
    {
        return view('account.signin');
    }

    public function signup($id = null)
    {
        if ($id != null) {
            $artist = User::all();
            return view('account.signup', compact('id', 'artist'));
        } else {
            return view('account.signup');
        }
    }
}
