<?php

namespace App\Http\Controllers;

use App\Models\marksheet;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function home(){

        $data = marksheet::all();
        return view('home',['mark'=>$data]);
    }

    public function addpage(){

        return view('add');
    }

    public function adddata(Request $request){

        $data = new marksheet();
        $data->name = $request->name;
        $data->roll = $request->roll;
        $data->reg = $request->reg;
        $data->bangla = $request->bangla;
        $data->english = $request->english;
        $data->math = $request->math;
        $data->phy = $request->phy;
        $data->bgs = $request->bgs;
        $data->curkit = $request->curkit;
        $total = $request->bangla + $request->english + $request->math + $request->phy + $request->bgs + $request->curkit;
        $data->total = $total;
        $percentage = $total / 6;
        $data->percentage = $percentage;
        $data->save();
        return redirect('home');    

    }


    public function updatepage($id){

        $data = marksheet::find($id);
        return view('update',['mark'=>$data]);
    }


    public function updatedata(Request $request){
        $id = $request['id'];
        $data = marksheet::find($id);
        $data->name = $request->name;
        $data->roll = $request->roll;
        $data->reg = $request->reg;
        $data->bangla = $request->bangla;
        $data->english = $request->english;
        $data->math = $request->math;
        $data->phy = $request->phy;
        $data->bgs = $request->bgs;
        $data->curkit = $request->curkit;
        $total = $request->bangla + $request->english + $request->math + $request->phy + $request->bgs + $request->curkit;
        $data->total = $total;
        $percentage = $total / 6;
        $data->percentage = $percentage;
        $data->save();
        return redirect('home');    

    }

    public function deletedata($id){

        $data = marksheet::find($id)->delete(); 
        return redirect('home');
    }


    public function viewdata($id){
        
        $data = marksheet::find($id);
        return view('view',['mark'=>$data]);
    }
}
