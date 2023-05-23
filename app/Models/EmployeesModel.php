<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    use HasFactory;

    protected $table = '_t_b_l_e__employees';

    protected $fillables = ["fullname", "address", "salary", "created at", "updated at"];
}
