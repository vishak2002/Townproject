<?php

namespace App\Http\Controllers;
use App\Models\Town;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Towncontroller extends Controller
{
    public function save(Request $request){

        $title=$request->input('title');
        $description=$request->input('description');
        $status=$request->input('status');
        $date=$request->input('date');
        
        Town::create([
            'title'=>$title,
            'description'=>$description,
            'status'=>$status,
            'date'=>$date

        ]);

        return view('Register');
    }

    public function show(){
        $all_items=Town::all();
        return view('itemshow',["items"=>$all_items]);
    }

    public function edit($id){
        $details=Town::where('id',$id)->get();
        return view('edit',['details'=>$details]);
    }

    public function update(Request $request,$id){
        if($request->input('date')){
           
            Town::where('id',$id)->update([
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'status'=>$request->input('status'),
                'date'=>$request->input('date')
                

            ]);
        }else{
            Town::where('id',$id)->update([
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'status'=>$request->input('status'),

            ]);
        }
        return redirect('itemshow');
    }

    public function delete($id){
        $delete=Town::where('id',$id)->delete();
        return redirect('');
    }
    }



