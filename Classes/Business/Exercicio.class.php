<?php

class Exercicio {

    /** @var ConexaoDAO */
    private $conexao;

    /**
     * __construct
     * Inicializa a conexao
     */
    public function __construct() {
        $this->conexao = new ConexaoDAO('exerciciosconcluidos');
    }

    /**
     * cadastrar
     * Cadastra um novo exercicio concluido
     * 
     * @param array $dados
     * @return int
     */
    public function cadastrar($dados) {
        return $this->conexao->Cadastrar($dados);
    }
    
    /**
     * buscarPorCapituloUsuario
     * Retorna a quantidade de exercicios e a maior nota naquele capitulo
     * 
     * @param string
     * @return array
     */
    public function buscarPorCapituloUsuario($idCapitulo, $idUsuario) {
        $query = "SELECT COUNT(*) as qtd, MAX(nota) as maiorNota, MAX(data) as data
                  FROM [tabela]
                  WHERE idCapitulo = ? AND idUsuario = ?";
        $dados = array($idCapitulo, $idUsuario);
        return $this->conexao->Buscar($query, $dados);
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
