<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMember extends Model
{
    use HasFactory;
    protected $table = 'data_member';
    protected $guarded = [];
}
