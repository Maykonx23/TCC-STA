<?php
    class Servico{
        protected $id_servico;
        private $titulo;
        private $mediaTempo;
        private $descricao;
        private usuario $id_u;
        private $rua;
        private $numero;

	public function getId_servico() {
		return $this->id_servico;
	}

	public function setId_servico($id_servico) {
		$this->id_servico = $id_servico;
	}

	public function getTitulo() {
		return $this->titulo;
	}

	public function setTitulo( $titulo) {
		$this->titulo = $titulo;
	}

	public function getMediaTempo() {
		return $this->mediaTempo;
	}

	public function setMediaTempo($mediaTempo) {
		$this->mediaTempo = $mediaTempo;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setDescricao( $descricao) {
		$this->descricao = $descricao;
	}
/*
	public usuario getId_u() {
		return $this->id_u;
	}

	public void setId_u(usuario $id_u) {
		$this->id_u = $id_u;
	}

	public function getRua() {
		return $this->rua;
	}

	public void setRua($rua) {
		$this->rua = $rua;
	}

	public function getNumero() {
		return $this->numero;
	}

	public void setNumero( $numero) {
		$this->numero = $numero;
	}
*/

    }