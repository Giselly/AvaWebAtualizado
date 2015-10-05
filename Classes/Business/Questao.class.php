<?php

class Questao {

    /** @var ConexaoDAO */
    private $conexao;

    /**
     * __construct
     * Inicializa a conexao
     */
    public function __construct() {
        $this->conexao = new ConexaoDAO('questoes');
    }

    /**
     * cadastrar
     * Cadastra um novo questoes
     * 
     * @param array $dados
     * @return int
     */
    public function cadastrar($dados) {
        return $this->conexao->Cadastrar($dados);
    }

    /**
     * editar
     * Editar um questoes existente
     * 
     * @param array $dados
     * @return int
     */
    public function editar($dados) {
        return $this->conexao->Editar($dados);
    }

    /**
     * excluir
     * Exclui um questoes existente
     * 
     * @param int
     * @return int
     */
    public function excluir($id) {
        return $this->conexao->Deletar($id);
    }

    /**
     * buscarPorID
     * Retorna os dados de uma questao especifica
     * @param string
     * @return array
     */
    public function buscarPorID($id) {
        $query = "SELECT *
                  FROM [tabela] WHERE id = ?";
        $dados = array($id);
        return $this->conexao->Buscar($query, $dados);
    }
    
    /**
     * buscarPorCapitulo
     * Retorna os dados das questoes de um capitulo especifico
     * @param string
     * @return array
     */
    public function buscarPorCapitulo($idCapitulo, $idUsuario) {
        $query = "SELECT q.id, q.questao
                  FROM questoes q
                  WHERE idCapitulo = ?
                  AND id % 2 = (SELECT COUNT(*) FROM exerciciosconcluidos WHERE idUsuario = ?) % 2
                  ORDER BY RAND()
                  LIMIT 0, 5";
        $dados = array($idCapitulo, $idUsuario);
        return $this->conexao->Buscar($query, $dados);
    }
    
    /**
     * buscarPorQuestao
     * Retorna os dados das questoes de um capitulo especifico
     * @param string
     * @return array
     */
    public function buscarPorQuestao($idQuestoes) {
        $query = "SELECT i.id, i.item, i.valor
                  FROM itens i
                  WHERE idQuestoes = ?
                  ORDER BY RAND()";
        $dados = array($idQuestoes);
        return $this->conexao->Buscar($query, $dados);
    }
    
    public function buscarItem($idItem){
        $query = "SELECT * FROM itens WHERE id = ?";
        $dados = array($idItem);
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
