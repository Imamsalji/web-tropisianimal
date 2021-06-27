<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     protected $fillable = [

        'nip', 'name', 'nama_belakang', 'jk', 'email', 'no_hp'

    ];
}
