<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
    protected $primaryKey = 'id';
    public const CREATED_AT = 'created_date';
    public const UPDATED_AT = 'update_date';
    protected $guarded = 'id';
}
