<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
class Student extends Model
{
    use HasFactory;
    public function students_class(){
        return $this->belongsTo(Clist::class,'clist_id','id');
    }

    public function student_department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function student_section(){
        return $this->belongsTo(Section::class,'section_id','id');
    }

    
}
