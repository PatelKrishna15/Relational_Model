<?php

namespace App\Http\Controllers;

use App\Models\Pagination;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PaginationController extends Controller
{
    public function index()
    {
        $data =Pagination::paginate(3);
        return view('page.index',compact('data'));
    }
    public function create()
    {
        return view('page.create');
    }
    public function store(Request $request)
    {
       $data =new Pagination();
       $data->name =$request->name;
       $data->save();
       return redirect()->route('page.index');
    }
}
