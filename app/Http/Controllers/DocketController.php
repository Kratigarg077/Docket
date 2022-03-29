<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docket;

class DocketController extends Controller
{
    public function index(){
       return view('docket.index');
    }
    public function create(){
        return view('docket.create');
    }
    public function upload(Request $request){
        $request->validate(['title'=>'required|max:255']);
        $docket = $request->title;
        Docket::create(['title'=>$docket]);
        return redirect()->back()->with('success',"Created Successfully!");
    }
    public function display(){
        $docket = Docket::orderBy('completed')->get();
        return view('docket.display')->with(['dockets' => $docket]);

    }
    public function edit($id){
        $docket = Docket::find($id);
        return view('docket.edit')->with(['id'=> $id, 'docket'=> $docket]);
    }
    public function delete($id){
        $docket = Docket::find($id)->delete();
        return redirect()->back()->with('success',"Docket deleted successfully"); 
    }
    public function update(Request $request){
        $request->validate(['title'=>'required|max:255']);
        $updatedocket = Docket::find($request->id);
        $updatedocket->update(['title' => $request->title]);
        return redirect('/display')->with('success',"DOCKET updated successfully!");

    }
    public function completed($id){
        $docket = Docket::find($id);
        if($docket->completed){
            $docket->update(['completed' => false]);
            return redirect()->back()->with('succes',"DOCKET marked as INCOMPLETE!");
        }
        else{
            $docket->update(['completed' => true]);
            return redirect()->back()->with('succes',"DOCKET marked as COMPLETE!");
        }
    }

}
