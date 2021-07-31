<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cmnt;

class CmntController extends Controller
{
    


public function sh(Cmnt $cmnt)
{
      $cmnts = Cmnt::all();
        return view('blog.index',compact('cmnts'));
      dd($cmnts);

    }


  public function cmnt(Request $request)
  {

    
    Cmnt::create([

              'cmnt'=>$request->cmnt,
              'user_id'=>auth()->id()
              

              
              


         ]);

 

  }


}
