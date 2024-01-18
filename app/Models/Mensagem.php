<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'assunto',
        'texto',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
