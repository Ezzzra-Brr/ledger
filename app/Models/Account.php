<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Account extends Model {
    protected $fillable = ['name', 'code', 'type', 'is_active'];
    protected $casts = ['is_active' => 'boolean'];
}