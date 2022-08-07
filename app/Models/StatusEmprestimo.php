<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusEmprestimo extends Model
{
    use HasFactory;

    const ATIVO     = 1;
    const ATRASADO  = 2;

    protected $fillable = [
       'descricao'
    ];
}
