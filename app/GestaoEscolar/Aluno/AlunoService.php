<?php
namespace App\GestaoEscolar\Aluno;

use App\GestaoEscolar\Aluno\AlunoRepositorio as AlunoRepositorio;

class AlunoService
{
	protected $alunoRepositorio;

	public function __construct(AlunoRepositorio $alunoRepositorio)
	{
		$this->alunoRepositorio = $alunoRepositorio;
	}
}
