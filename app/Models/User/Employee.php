<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function getFullnameAttribute(){
        return $this->fname.' '.$this->lname;
    }

    public function employee_dept(){
        return $this->hasOne(EmployeeDepartment::class,'emp_id')->withDefault();
    }

    public function employee_depts(){
        return $this->hasMany(EmployeeDepartment::class,'emp_id');
    }

    public function emp_account(){
        return $this->hasOne(EmployeeAccount::class,'emp_id');
    }

    public function emp_role(){
        return $this->hasOne(EmployeeRole::class,'emp_id');
    }
}
