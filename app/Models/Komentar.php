<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';

    protected $fillable = [
        'isi_komentar',
        'id_histories',
        'id_user',
    ];

    public function history()
    {
        return $this->belongsTo(History::class, 'id_histories');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
