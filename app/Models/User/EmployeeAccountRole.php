<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class EmployeeAccountRole extends Model
{
    use HasFactory;
    protected $table ='employee_roles';

}
