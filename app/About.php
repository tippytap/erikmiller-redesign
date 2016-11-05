<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['title', 'about_text'];

    protected $primaryKey = 'title';

    public $incrementing = false;

    public $timestamps = false;

}
