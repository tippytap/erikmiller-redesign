<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'background', 'link', 'blurb'];

    protected $guarded = ['created_at', 'updated_at'];

    protected $primaryKey = 'title';

    public $incrementing = false;

}
