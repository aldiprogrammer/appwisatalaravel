<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori'];


    /**
     * Get all of the comments for the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wisata()
    {
        return $this->hasMany(Wisata::class, 'kategori', 'id');
    }
}
