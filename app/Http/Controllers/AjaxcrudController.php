<?php

namespace App\Http\Controllers;

use App\Models\Ajaxcrud;
use Illuminate\Http\Request;

class AjaxcrudController extends Controller
{
    public function index()
    {
        $data =Ajaxcrud::get();
        return view('ajaxcrud.index',compact('data'));
    }
    public function ajax(Request $request)
    {
        if($request->ajax())
        {
            $view='ajaxcrud.ajaxcrud';
        }
        else
        {
            $view='index';
        }
        $data = Ajaxcrud::get();
        return view($view,compact('data'));
    }
    public function store(Request $request)
    {
        $data =Ajaxcrud::updateOrCreate([
           'id'=>$request->id,
        ],
        [
            'name'=>$request->name
        ]);
        $data->save();
        return response()->json([
            'code'=>'200'
        ]);
    }
}
