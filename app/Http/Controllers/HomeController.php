<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students=Students::all();
        return view('home')->with('student',$students);
    }

    public function add(Request $request)
    {   
         $rulse = [ 'name' => 'required|min:3','city' => 'required|min:4'];
        $msg = ['name.required' => 'Please enter a name',
                 'name.min' => 'Minimum is 3 characters',
                 'city.required' => 'Please enter a city',
                 'city.min' => 'Minimum is 4 characters',
            ];
        $validate = Validator::make($request->all(), $rulse,$msg);
        if ($validate->fails()) {
            return response($validate->errors(),401);
        }

    //if ($request->ajax()) return;
//$actionbtn = $request->sub;
 $data=$request->all();
 
    $createStudent=Students::create($data);
return response()->json($createStudent);


       
       
         
    }
public function getSingleStudent($student_id){
    $student = Students::find($student_id);
    return response()->json($student);
}

public function updateSingleStudent(Request $request,$student_id){
   
    $rulse = [ 'name' => 'required|min:3','city' => 'required|min:4'];
        $msg = ['name.required' => 'Please enter a name',
                 'name.min' => 'Minimum is 3 characters',
                 'city.required' => 'Please enter a city',
                 'city.min' => 'Minimum is 4 characters',
            ];
        $validate = Validator::make($request->all(), $rulse,$msg);
        if ($validate->fails()) {
            return response($validate->errors(),401);
        }
          
         Students::where('id', $student_id)
                 ->update(['name' => $request->name,'city' => $request->city]); 
      $student = Students::find($student_id);  
     
    return response()->json($student);
}

public function deleteSingleStudent($student_id){
    $student = Students::where('id', $student_id)->delete();
    
    return response()->json($student);
}   

}
