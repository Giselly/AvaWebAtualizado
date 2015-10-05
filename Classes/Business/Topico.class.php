<?php

class Topico {

    /** @var ConexaoDAO */
    private $conexao;

    /**
     * __construct
     * Inicializa a conexao
     */
    public function __construct() {
        $this->conexao = new ConexaoDAO('topicos');
    }

    /**
     * cadastrar
     * Cadastra um novo topico
     * 
     * @param array $dados
     * @return int
     */
    public function cadastrar($dados) {
        return $this->conexao->Cadastrar($dados);
    }

    /**
     * editar
     * Editar um topico existente
     * 
     * @param array $dados
     * @return int
     */
    public function editar($dados) {
        return $this->conexao->Editar($dados);
    }

    /**
     * excluir
     * Exclui um topico existente
     * 
     * @param int
     * @return int
     */
    public function excluir($id) {
        return $this->conexao->Deletar($id);
    }

    /**
     * buscar
     * retorna os topico cadastrados
     * 
     * @param array $dados que serão usuados para filtrar 
     * @return array
     */
    public function buscar($dados = array()) {

        /** @var string */
        $filtro = "";

        /** Monta o filtro na consulta */
        if (count($dados) > 0) {
            $filtro = 'WHERE ' . implode(" LIKE ? OR ", array_keys($dados)) . " LIKE ?";
        }
        /** Consulta para retornar os usuarios */
        $query = "SELECT *
                  FROM [tabela]
                  {$filtro}
                  ORDER BY ordem";

        /** Executa e retorna a consulta */
        return $this->conexao->Buscar($query, $dados);
    }

    /**
     * buscarPorID
     * Retorna os dados de um capitulo especifico
     * @param string
     * @return array
     */
    public function buscarPorID($id) {
        $query = "SELECT t.id, idCapitulo, t.ordem, t.titulo, t.subtitulo, t.conteudo, CONCAT(c.titulo, ' | ', c.subtitulo) as capitulo
                  FROM [tabela] as t
                  INNER JOIN capitulos as c
                  ON idCapitulo = c.id
                  WHERE t.id = ?";
        $dados = array($id);
        return $this->conexao->Buscar($query, $dados);
    }

    /**
     * buscarPorCapitulo
     * Retorna os topicos de um capitulo especifico
     * @param string
     * @return array
     */
    public function buscarPorCapitulo($idCapitulo) {
        $query = "SELECT *
                  FROM [tabela] WHERE idCapitulo = ?";
        $dados = array($idCapitulo);
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
