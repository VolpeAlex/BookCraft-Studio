<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Books extends Model
{
    use HasFactory;

    protected $fillable=['id','title','description','pages','author_id','category_id'];
    protected $table = 'books';
    public function author(): BelongsTo
    {
        return $this->belongsTo(Authors::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }
}
