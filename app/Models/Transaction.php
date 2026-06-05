<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Transaction extends Model {
    protected $fillable = ['date', 'description'];
    protected $casts = ['date' => 'date'];
    public function entries() { return $this->hasMany(JournalEntry::class); }
}