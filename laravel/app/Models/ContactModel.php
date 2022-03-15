<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "Contact"; //table name
    public $timestamps = false; // not using default timestamp

    protected $fillable = [
        'id',
        'firstName',
        'lastName',
        'email',
        'age',
        'salary',
        'address',
    ];
}