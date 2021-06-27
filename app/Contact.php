<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [

        'deskripsi', 'subject', 'nama', 'email'

    ];
}
