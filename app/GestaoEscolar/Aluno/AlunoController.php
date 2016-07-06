<?php
namespace App\GestaoEscolar\Aluno;

use App\Http\Controllers\Controller;
use App\GestaoEscolar\Aluno\AlunoService as AlunoService;

class AlunoController extends Controller
{
	protected $alunoService;

	public function __construct(AlunoService $alunoService)
	{
		$this->alunoService = $alunoService;
	}
}
