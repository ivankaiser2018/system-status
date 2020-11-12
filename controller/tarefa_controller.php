<?php



$acao= isset($_GET['acao'])? $_GET['acao']:$acao;





//instanciar classe Tarefa


//TRATANDO A ACAO




//PEGANDO O PARAMETRO acao pelo GET do FORMULARIO
if ($acao=='inserir' ) {
    
require'../model/tarefa_model.php';
require'../model/tarefa_service.php';
require'../nova_tarefa.php';
    $tarefa=new Tarefa();

//metodo POST vindo do Formulario- atraves do metodo inteligente SET

$tarefa->__set('tarefa',$_POST['tarefa']);


 $con=new PDO("mysql:host=localhost;dbname=sistema_status","root","");

$tarefaService=new TarefaService($con,$tarefa);
try {
    $tarefaService->inserir($tarefa);
       header('Location:/sistema_status/nova_tarefa.php?inclusao=1');
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
    
} 
else if($acao=='recuperar'){
    echo 'chegamos ate aqui';
    

    //buscar dados do banco
    
    $tarefa=new Tarefa();
     $con=new PDO("mysql:host=localhost;dbname=sistema_status","root","");
     
    $tarefaService=new TarefaService($con,$tarefa);
     $tarefas = $tarefaService->recuperar();
      
//LISTAR TODAS AS TAREFAS
    
    
    
    
}










          

  
            
               
        
            
            
           
            
             
             
             
             ?>