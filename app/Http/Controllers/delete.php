<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Delta; //import model
 
class delete extends Controller
{
    //
  public  function list(){
        // $data=DB::select('select *from BOX '); 
       $data=Delta::all();
        return view("Delete",['delta'=>$data]);
    }


   public function delete($id){
         //$data=DB::select('delete from BOX where id=?',[$id]);
         $data=Delta::find($id);  // This will Find ID First Then Delete Data On The ID Base
        $data->delete();
         
       return redirect("list");
        
    }

  public   function showData($id) // This will find id which user want to upadate
    {
        $data=Delta::find($id);
        return view("/update",['data'=>$data]);
    }
    
  public   function update(Request $req) // Update
    {
      
       $data=Delta::find($req->id);
        $req->validate([
          'FIRSTNAME'=>'required',
          'LASTNAME'=>'required'
        ]);
        $data->FIRSTNAME=$req->FIRSTNAME;
        $data->LASTNAME=$req->LASTNAME;
       
        $data->save();
        return redirect("list");
    }

  function install()
  {
   return view("save");


  }

  function insert(Request $req){

    $data=new Delta;  //instance of model adata
    $req->validate([
      'FIRSTNAME'=>'required',
      'LASTNAME'=>'required'
    ]);
    $data->FIRSTNAME=$req->FIRSTNAME;  // this name will be same name of the table coloumn name which is defined
    $data->LASTNAME=$req->LASTNAME;     // this name will be same name of the table coloumn name which is defined
    $data->save();
    return redirect("list");
  }
    
}
