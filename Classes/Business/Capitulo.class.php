<?php

class Capitulo {
    
    private $diretorio;
    private $capitulos;
    private $path;

    public function __construct() {
        $this->path = "capitulos/";
        $this->diretorio = dir($this->path);
    }

    public function Listar($capituloAtual) {

        while ($pasta = $this->diretorio->read()) {
            if ($pasta != "." && $pasta != ".." && (int)$pasta < $capituloAtual + 19) {
                $this->capitulos[$pasta] = array();

                $subdiretorio = dir("{$this->path}{$pasta}/");
                while ($arquivo = $subdiretorio->read()) {
                    if ($arquivo != "." && $arquivo != "..")
                        $this->capitulos[$pasta][] = $this->removerUnderline($arquivo);
                }
            }
        }

        $this->diretorio->close();
        return $this->capitulos;
    }
    
    public function TopicoAtual($capitulo, $topico){
        include_once "{$this->path}{$capitulo}/" .utf8_decode($this->inserirUnderline($topico));
    }
    
    private function removerUnderline($topico){
        return substr(str_replace("_", " ", $topico), 0, strlen($topico) - 5);
    }
    
    private function inserirUnderline($topico){
        return str_replace(" ", "_", $topico) . ".html";
    }
    

    /**
     * Retorna uma instância única de uma classe.
     * @staticvar Singleton $instance A instância única dessa classe.
     * @return Singleton A Instância única.
     */
    public static function getInstance() {
        /** Inicializa a var instance e retorna */
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

}
