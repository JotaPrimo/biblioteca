<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusEmprestimo extends Model
{
    use HasFactory;

    protected $fillable = [
       'descricao'
    ];
}
