<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['title','author_id','slug','body','image',];
    
    public function author(): BelongsTo
    {
        return $this -> belongsTo(User::class);
    }
}
