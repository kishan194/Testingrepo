<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testmodel extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'log_mstr';

}
