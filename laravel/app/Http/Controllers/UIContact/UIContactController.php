<?php
namespace App\Http\Controllers\UIContact;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UIContactController extends Controller
{
//insert/post
    public function displayform()
    {
        return view('contactform'); // return UI contactform
    }
   
    public function save(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $age = $request->input('age');
        $salary = $request->input('salary');
        $address = $request->input('address');

        DB::insert('insert into Contact (firstName,lastName,email,age,salary,address) values (?,?,?,?,?,?)'
        ,[$firstName,$lastName,$email,$age,$salary,$address]); //take the value from the input and store in DB

        return redirect('https://8000-meryvillano16-gitpodwork-c6robl7tl7w.ws-eu34.gitpod.io/contactadd')->with('success', 'Data Saved'); //redirect to path /contact refer in route
    }
//get
    public function viewform()
    {
        return view('contactview');
    }

    public function index()
    {
        $contact = DB::select('select * from Contact');
        return view('contactview',['contact'=>$contact]);
    }

//update
    
    //display
    public function edit_function($id)
    {
      $contact = DB::select('select * from Contact where id=?', [$id]);
      return view('contactedit',['contact'=>$contact]);
    }

    //save edit data
    public function update_function(Request $request, $id)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $age = $request->input('age');
        $salary = $request->input('salary');
        $address = $request->input('address');

        DB::update('update Contact set firstName=?, lastName=?, email=?, age=?, salary=?, address=? where id = ?'
        ,[$firstName,$lastName,$email,$age,$salary,$address, $id]); //take the value from the input and store in DB

        return redirect('https://8000-meryvillano16-gitpodwork-c6robl7tl7w.ws-eu34.gitpod.io/contactview')->with('success', 'Data Updated'); //redirect to path /contact refer in route
  
    }

    //delete
    public function delete_function($id)
    {
        DB::delete('delete from Contact where id = ?',[$id]);
        return redirect('https://8000-meryvillano16-gitpodwork-c6robl7tl7w.ws-eu34.gitpod.io/contactview')->with('success','Data Deleted');
    }

}