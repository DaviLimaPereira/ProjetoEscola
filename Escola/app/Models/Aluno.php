<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'local_nascimento', 'endereco', 'mae', 'pai', 'responsavel'];
}
