<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penualan extends Model
{
    use HasFactory;

    protected $table = 'penjualans';
    
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = '';

    protected $guarded = [];
}
