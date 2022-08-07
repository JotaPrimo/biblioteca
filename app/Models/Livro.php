<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'autor_id', 'categoria_id', 'titulo', 'resenha', 'isbn', 'quantidade_disponivel', 'quantidade-total',
         'quantidade_emprestado'
    ];
}
