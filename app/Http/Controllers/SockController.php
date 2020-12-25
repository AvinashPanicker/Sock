<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sock;

class SockController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function testmonial()
    {
        return view('testmonial');
    }
    public function shop()
    {
        $shop=Sock::all();
        return view('shop',compact('shop'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function show(Sock $id)
    {
        $item=$id;
        return view('shopshow',compact('item'));
    }
    public function create()
    {
        return view('newitem');
    }
    public function store(Request $request)
    {
        
        $item=new Sock();
        $item->name=request('name');
        $item->src=request('src');
        $item->price=request('price');
        $request->validate([
            'name'=>'required|min:2|max:10',
            'src'=>'required',
            'price'=>'required'
        ]);
        $item->save();
        return redirect('/shop');

     
    }
    public function destroy($id)
    {
        $item=Sock::find($id);
        $item->delete();
        return redirect('/shop');
    }
    public function edit(Sock $id)
    {
        $item=$id;
        return view('shopedit',compact('item'));
    }
    public function update(Request $request,$id)
    {
        $item=Sock::Find($id);
        $item->name=request('name');
        $item->src=request('src');
        $item->price=request('price');
        $request->validate([
            'name'=>'required|min:3|max:13',
            'src'=>'required',
            'price'=>'required'
        ]);
        $item->save();
        return redirect('/shop');

     
    }
}
