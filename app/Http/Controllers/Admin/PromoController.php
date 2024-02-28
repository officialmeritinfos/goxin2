<?php

namespace App\Http\Controllers\Admin;

use App\Defaults\Regular;
use App\Http\Controllers\Controller;
use App\Models\AuthCode;
use App\Models\GeneralSetting;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PromoController extends Controller
{
    use Regular;
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Admin Dashboard',
            'user'     =>  $user,
            'promos'=>AuthCode::get()
        ];

        return view('admin.promos',$dataView);
    }
    public function delete($id)
    {
        AuthCode::where('id',$id)->delete();
        return back()->with('success','Deleted');
    }

    public function newPromo(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();

        $code = $this->generateUniqueCode('auth_codes','code');

        AuthCode::create([
            'code'=>$code
        ]);

        return back()->with('success','Code added');
    }
}
