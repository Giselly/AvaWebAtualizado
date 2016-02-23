<?php

class Usuario {

    /** @var ConexaoDAO */
    private $conexao;

    /**
     * __construct
     * Inicializa a conexao
     */
    public function __construct() {
        $this->conexao = new ConexaoDAO('usuarios');
    }

    /**
     * cadastrar
     * Cadastra um novo usuario
     * 
     * @param array $dados
     * @return int
     */
    public function cadastrar($dados) {

        /** Converte a data para o padrão do BD */
        if (isset($dados['dataNascimento'])) {

            /** @var string */
            $dados['dataNascimento'] = datasql($dados['dataNascimento']);
        }

        return $this->conexao->Cadastrar($dados);
    }

    /**
     * editar
     * Editar um usuario existente
     * 
     * @param array $dados
     * @return int
     */
    public function editar($dados) {

        /** Converte a data para o padrão do BD */
        if (isset($dados['dataNascimento'])) {

            /** @var string */
            $dados['dataNascimento'] = datasql($dados['dataNascimento']);
        }

        return $this->conexao->Editar($dados);
    }

    /**
     * excluir
     * Exclui um usuario existente
     * 
     * @param int
     * @return int
     */
    public function excluir($id) {
        return $this->conexao->Deletar($id);
    }

    /**
     * buscar
     * retorna os usuarios cadastrados
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
        $query = "SELECT id, nome, login, foto, apelido, DATE_FORMAT(dataNascimento, '%d/%m/%Y') dataNascimento, telefone, email, capituloAtual, status, primeiroLogin
                  FROM usuarios
                  {$filtro}
                  ORDER BY status DESC, nome ASC";

        /** Executa e retorna a consulta */
        return $this->conexao->Buscar($query, $dados);
    }

    /**
     * buscarPorID
     * Retorna os dados de um usuario especifico
     * @param string
     * @return array
     */
    public function buscarPorID($id) {
        $query = "SELECT id, nome, login, foto, apelido, DATE_FORMAT(dataNascimento, '%d/%m/%Y') dataNascimento, telefone, email, capituloAtual, status, cpf, rg, sexo, nomeMae, nomePai, estadoCivil, email, telefone, cep, endereco, bairro, primeiroLogin FROM [tabela] WHERE id = ?";
        $dados = array($id);
        return $this->conexao->Buscar($query, $dados);
    }

    /**
     * buscarPorLogin
     * Retorna os dados de um usuario especifico
     * @param string
     * @return array
     */
    public function buscarPorLogin($dados) {
        $query = "SELECT id, nome, login, foto, apelido, professor, DATE_FORMAT(dataNascimento, '%d/%m/%Y') dataNascimento, telefone, email, capituloAtual, status, primeiroLogin FROM [tabela] WHERE login = ? AND senha = ?";
        return $this->conexao->Buscar($query, $dados);
    }

    /**
     * editar
     * Recebe os dados do usuario e atualiza no banco
     * 
     * @param array
     * @return string
     */
    public function editarSenha($idUsuario, $senhaAtual, $novaSenha, $confirmarSenha) {
        if (($this->validarSenha($idUsuario, $senhaAtual)) == 1) {
            if ($novaSenha == $confirmarSenha) {
                /** Query para alterar senha */
                $query = "UPDATE [tabela] SET senha = PASSWORD(?) WHERE id = ?";

                /** Dados para alterar a senha */
                $dados = array($novaSenha, $idUsuario);

                /** Executa a ação no banco */
                $this->conexao->Buscar($query, $dados);
                $retorno = "true";
            } elseif ($novaSenha == "") {
                $retorno = "O campo senha não pode ser vazio.";
            } else {
                $retorno = "Os campos \"nova senha\" e \"confirmar nova senha\" não conferem, por favor, preencha novamente.";
            }
        } else {
            $retorno = "A senha atual não está correta, por favor, preencha novamente com a sua senha atual.";
        }

        return $retorno;
    }

    /**
     * editarLogin
     * Alterar o login de um usuario
     * 
     * @param int $idUsuario ID do usuario selecionado
     * @param string $novoLogin login que será atualizado no banco
     * @return int
     */
    public function editarLogin($idUsuario, $novoLogin) {
        /** Query para atualiza o login do usuario */
        $query = "UPDATE [tabela] SET login = ? WHERE id = ?";

        /** Parametros para a consulta */
        $dados = array($novoLogin, $idUsuario);

        /** Executar a consulta no banco */
        $this->conexao->Buscar($query, $dados);
        return "true";
    }

    /**
     * validarSenha
     * Verifica se a senha informada esta correta
     * 
     * @param type $idUsuario ID do usuario logado
     * @param type $senha Senha informada pelo usuario
     * @return int
     */
    private function validarSenha($idUsuario, $senha) {
        /** Query para verificar se a senha esta correta */
        $query = "SELECT COUNT(*) as qtd FROM [tabela] WHERE id = ? AND senha = PASSWORD(?)";

        /** Parametros para a query */
        $dados = array($idUsuario, $senha);

        /** Executa a consulta */
        $retorno = $this->conexao->Buscar($query, $dados);

        return $retorno[0]['qtd'];
    }
 
    /**
     * password
     * Converte a senha para password
     * 
     * @param type $str
     * @return type
     */
    public function password($str) { 
        return '*'.strtoupper(sha1(pack('H*',sha1($str)))); 

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
