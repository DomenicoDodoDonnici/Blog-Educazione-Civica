<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'user_id'];

    // Relazione uno a molti
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Relazione uno a molti -> Gli utenti hanno molte categorie
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Uso questa funzione per ottenere i post attivi nella categoria corrente
    public function publishedPosts()
    {
        return SELF::posts()->with(['user:id,name', 'category'])->published()->latest('created_at')->paginate(10);
    }
}
