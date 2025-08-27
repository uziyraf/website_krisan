<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Petani extends Model
{
    use HasFactory;

    protected $table = 'farmers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // TAMBAHKAN BAGIAN INI:
    protected $fillable = [
        'name',
        'address',
        'mapLink',
        'specialization',
        'description',
        'image',
        'story',
        'whatsapp',
    ];

    public function bunga(): BelongsToMany
    {
    // Tambahkan argumen ketiga dan keempat untuk nama kolom kustom
    return $this->belongsToMany(Bunga::class, 'flower_farmer', 'farmer_id', 'flower_id');
    }
}