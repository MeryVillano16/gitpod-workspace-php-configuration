<?php
namespace App\Http\Controllers\UIContact;

use\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIContactController extends Controller
{
    public function displayform()
    {
        return view('contactform');
    }
   
    public function save(Request $request)
    {
        $id = $request->input('id');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $age = $request->input('age');
        $salary = $request->input('salary');
        $address = $request->input('address');

        DB::insert('insert into Contact (id,firstName,lastName,email,age,salary,address) values (?,?,?,?,?,?,?)'
        ,[$id,$firstName,$lastName,$email,$age,$salary,$address]);

        return redirect('contact')->with('success', 'Data Saved');
    }

    public function viewform()
    {
        return view('contactview');
    }

    public function index()
    {
        $contact = DB::select('select * from Contact');
        return view('contactview',['contact'=>$contact]);
    }
}