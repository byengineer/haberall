<?php

namespace App\Http\Controllers\App;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    protected function init()
    {

        return view('app.profile');
    }

    protected function resimKaydet(Request $request){
        $rules = array(
            'profile-image' => 'image|required',

        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }else{
            if(Input::file())
            {

                $image = Input::file('profile-image');
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('images/avatar/' . $filename);

                Image::make($image->getRealPath())->resize(200, 200)->save($path);
                $sonuc = User::where('id',Auth::user()->id)->update(['avatar'=>$filename]);
                if($sonuc)  return Redirect::back()->with('success','Profil Resminiz Başarıyla Değiştirildi.');

            }
        }


    }
}
