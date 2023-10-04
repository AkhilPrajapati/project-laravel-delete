<?php
namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;
class MemberController extends Controller
{
    function list(){
        $data = Member::all();
        return View('list', ['members'=>$data]);
    }
    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('/list');
    }
    function edit($id){
        // return Member::find($id);     test garnalai
        //syntax: return Modelname::find(id)
        $data = Member::find($id);
        return view('edit', ['data'=>$data]);
    }
    function update(Request $req){
        // return $req->input();//initial ma yo line matra for testing
        $varData = Member::find($req->id);
        $varData->name=$req->name;
        $varData->email=$req->email;
        $varData->address=$req->address;
        $varData->save();
        return redirect('/list');// or <return back();> garda nu hunxa
    }

}
