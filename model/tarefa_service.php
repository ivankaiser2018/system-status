<?php


class TarefaService{
    
       private $tarefa;
       private $con;
//construtor
       // Instancia da Conexao e da Tarefa /  Tipagem/
    

    
       
       
       
    public function inserir(Tarefa $tarefa){
       $con=new PDO("mysql:host=localhost;dbname=sistema_status","root","");
          $sql="insert into tb_tarefas(tarefa)values(:tarefa)";
        $sql=$con->prepare($sql);
        $sql->bindValue(':tarefa',$tarefa-> __get('tarefa'));
        
        
        //$stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $sql->execute();
        
        
        
        return $tarefa;
        
    }
     public function recuperar(){
        
         $con=new PDO("mysql:host=localhost;dbname=sistema_status","root","");
         
         $sql=' select id,id_status,tarefa from tb_tarefas';
         $sql=$con->prepare($sql);
         $sql->execute();
         
         return  $sql->fetchAll(PDO::FETCH_OBJ);// ARRAY de OBJETOS
    }
    
     public function atualizar(){
        
    }
    
     public function remover(){
        
    }
    
    
}