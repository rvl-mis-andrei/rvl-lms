<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeUserAccess extends Model
{
    use HasFactory;
    protected $table ='lms_user_access';

}
