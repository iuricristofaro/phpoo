<?php  

require_once 'ClienteInterface.php';

class Cliente implements ClienteInterface
{
    public $nome,$cpf,$endereco,$fone = array();
    
    public function __construct($nome, $cpf, $endereco, $fone) 
    {
        $this->nome[] = $nome;
        $this->cpf[] = $cpf;
        $this->endereco[] = $endereco;
        $this->fone[] = $fone;
    }
    
    public function retornaDados(){
        echo'CPF: '. $this->getCpf() . '<br>',
            'Endereco: '. $this->getEndereco() . '<br>',
            'Fone: '. $this->getFone() . '<br>';
    }

    public function getNome() 
    {
        foreach ($this->nome as $nome) 
        {
            echo  $nome.'<br>';
        }    
    }
   public function getCpf() 
    {
       foreach ($this->cpf as $cpf) 
        {
            echo $cpf.'<br>';
        }
    }

   public function getEndereco() 
    {
       foreach ($this->endereco as $endereco) 
        {
            echo $endereco.'<br>';
        }
    }

   public function getFone() 
    {
       foreach ($this->fone as $fone) 
        {
            echo $fone.'<br>';
        }
    }   
}


?>