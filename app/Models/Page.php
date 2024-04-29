<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug','content', 'navbar', 'footer', 'user_id'];

    // Relazione uno a molti -> Gli utenti hanno molte pagine
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
