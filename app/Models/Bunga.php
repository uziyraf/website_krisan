<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bunga extends Model
{
    use HasFactory;

    protected $table = 'flowers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // TAMBAHKAN BAGIAN INI:
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function petani(): BelongsToMany
    {
    // Urutannya dibalik sesuai dengan modelnya
    return $this->belongsToMany(Petani::class, 'flower_farmer', 'flower_id', 'farmer_id');
    }
}