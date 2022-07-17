<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    

    protected $fillable = 
    [
            'stname',
            'stmelli',
            'stmobile', 
            'stemail',
            'school' ,
            'title',
            'lang' ,
            'subject',
            'teachername',
            'teachermobile',
            'filename' ,
            'extfilename' ,
            'verifycode',
            'timestamp' ,

    ];
}
