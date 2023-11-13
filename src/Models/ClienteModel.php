<?php

namespace src\Models;

use PDO;
use GHOST\Model\Model;

class ProdutoModel extends Model
{
    private $id_cliente;
    private $nome_completo;
    private $CPF;
    private $celular;
    private $CEP;
    private $email;
    private $senha;
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function salvarCliente()
    {
        $query = "INSERT INTO CADASTRO_CLIENTE (nome_completo, CPF, celular, CEP, email, senha) VALUES(:nome_completo, :CPF, :celular, :CEP, :email, :senha)";
        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':nome_completo', $this->__get('nome_completo'));
        $stmt->bindValue(':CPF', $this->__get('CPF'));
        $stmt->bindValue(':celular', $this->__get('celular'));
        $stmt->bindValue(':CEP', $this->__get('CEP'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        return $this;
    }
}

?>