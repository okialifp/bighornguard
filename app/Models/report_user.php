<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report_user extends Model
{
    protected $tabel = "report_users";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','title','description','created_at'
    ];
}
