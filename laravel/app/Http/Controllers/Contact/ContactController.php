<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ContactModel;

class ContactController extends Controller
{
    //get method
    public function contactAll(){
        return response()->json(ContactModel::get(), 200);
    }

    //get method using Id
    public function contactById($id){
        return response()->json(ContactModel::find($id), 200);
    }

    //post method
     public function contactSave(Request $request){
        $contact = ContactModel::create($request->all());
        return response()->json($contact, 201);
    }

    //put method
    public function contactUpdate(Request $request, ContactModel $contact){
        $contact->update($request->all());
        return response()->json($contact, 200);
    }
    
    //delete method
    public function contactDelete(Request $request, ContactModel $contact){
        $contact->delete();
        return response()->json(null, 204);
    }
}
