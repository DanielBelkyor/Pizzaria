<?php
include('../../config/inicializar.php');
  if(isset($_GET["action"]))
 {
    if($_GET["action"] == "save")
    {

        $ingSave = new Ingrediente();
        $ingSave ->setIngrediente($_POST['no_ingrediente']);

        $ingSaveDao = new IngredienteDao();
        $ingSaveDao->save($ingSave);

        echo json_encode(array("sucesso" => true));
    }
    if($_GET["action"] == "deletar")
    {
        $ingDelete = $_GET["id"];

        $ingdeleDao = new IngredienteDao();
        $ingdeleDao ->delete($ingDelete);
    }
    if($_GET["action"] == "listar")
    {
        $Dao = new IngredienteDao();
        $ingredientes = $Dao->getIngredientes();

        echo json_encode($ingredientes);
    }

}



?>