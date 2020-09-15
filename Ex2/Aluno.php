<?php

class Aluno extends Pessoa {

	private $matricula;

	private $ultAcesso;

	public function elegivel() {
		return false;
	}
	public function horasAc() {
		return 0;
	}
}
