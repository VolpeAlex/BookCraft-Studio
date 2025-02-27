<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Authors extends Model
{
    use HasFactory;

    protected $fillable=['id','name','birthday'];
    protected $table = 'authors';
    public function book(): HasMany
    {
        return $this->hasMany(Books::class);
    }
}
