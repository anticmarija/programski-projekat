<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public $timestamps = false;
    
    public function project() {
        
        return $this->belongsTo(Project::class);
    }
}
