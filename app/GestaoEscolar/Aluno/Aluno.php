<?php
namespace App\GestaoEscolar\Aluno;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'aluno';
    protected $fillable = ['nome', 'email', 'data_nascimento', 'sexo', 'endereco'];
}
