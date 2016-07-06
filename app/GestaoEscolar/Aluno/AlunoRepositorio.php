<?php
namespace App\GestaoEscolar\Aluno;

use App\GestaoEscolar\Aluno\Aluno as Aluno;

class AlunoRespositorio
{
	protected $aluno;

	public function __construct(Aluno $aluno)
	{
		$this->aluno = $aluno;
	}
}
