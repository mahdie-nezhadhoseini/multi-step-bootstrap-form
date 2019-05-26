<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\DomCrawler\Form;

class PageController extends Controller
{
    public function forms(){
        //نمایش فرم ما
        return view('forms');
    }

    //ذخیره کردن ولیدیشن ها و نمایش ارور
    public function store(Requests\test $request){
        $form = new Form;
        $form->name     = $request->get('name');
        $form->email    = $request->get('email');
        $form->password = Hash::make($request->get('password'));

        //ذخیره کردن فرمموون
        $form->save();

        //برگردوندن کاربر به صفحه ی فرم
        return Redirect::to('forms');
    }
}
