<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "Contact"; //table name
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'email',
        'age',
        'salary',
        'address',
    ];
}