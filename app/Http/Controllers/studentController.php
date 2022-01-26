<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\studetd;


class studentController extends Controller
{
    public  function  create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
      /*DB::table('studetds')->insert([
            'numper' =>$request->numper,
            'name' => $request->name,
            'addres' => $request->addres ,
            'created_at' => now(),
            'updated_at' =>now()
        ]);*/

        $student = new studetd;
        $student->numper = $request->numper;
        $student->name =$request->name;
        $student->addres = $request->addres;
        $student->save();
        return redirect()->route('show');

    }
  public  function show()
  {
      $student = studetd::all();

     // $student = DB::table('studetds')->get();

      return view('show' , compact('student'));
  }

  public  function edit($id)
  {
      $student = DB::table('studetds')
        ->where('id' ,'=', $id)
        ->first();

    return view('edit' , compact('student'));

  }

  public function update(Request $request)
  {
    $id = $request->id;
    DB::table('studetds')
        ->where('id' , $id)
        ->update([
            'numper' =>$request->numper,
            'name' => $request->name,
            'addres' => $request->addres ,

        ]);

    return redirect()->route('show');
  }


  public  function  delete($id)
  {
  /*DB::table('studetds')
        ->delete($id);
          $deee = studetd::find($id);
  $deee->delete();
*/studetd::destroy($id);     return redirect()->route('show');

  }

}
