<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $aberto;
    private $pagAtual;
    private $leitor;
    
    public function detalhes() {
        echo "Livro ". $this->titulo ." escrito por ". $this->autor."<br/>";
        echo "Páginas: ". $this->totPaginas." pagina atual ".$this->pagAtual."<br/>";
        echo "Sendo lido por ".$this->leitor->getNome()."<br/>";
    }
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = FALSE;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
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
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->aberto = FALSE;
    }

    public function folhear($pagina) {
        if ($pagina > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $pagina;
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}
