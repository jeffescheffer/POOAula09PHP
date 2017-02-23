<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author Jefferson
 */
class Livro implements Publicacao {
    //put your code here
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
   


    //Métodos
    public function detalhes() {
        echo "Livro " . $this->titulo . " ,escrito por " . $this->autor;
        echo "<br> Páginas: " . $this->totPaginas . " atual " . $this->getPagAtual();
        echo "<br> Sendo lido por " . $this->leitor->getNome();
        
    }
    
    //Métodos Especiais
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = TRUE;
    }

    public function avancarPag() {
        $this->pagAtual++;
    }

    public function fechar() {
        $this->aberto = FALSE;
    }

    public function folhear($p) {
        if($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}
