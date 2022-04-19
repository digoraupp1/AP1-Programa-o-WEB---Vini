<?php 

    class ClientController {

        function __construct(){
            if(!isset($_SESSION['user'])){
                header('Location: index.php?controller=main&action=login');
            }
        }

        function listClients() {
            require_once('models/ClientModel.php');
            $clientModel = new ClientModel();
            $result = $clientModel -> listClients();

            $arrayClients = array();
            while($line = $result -> fetch_assoc()){
                array_push($arrayClients, $line);
            }
            
            require_once('views/templates/header.php');
            require_once('views/client/listClients.php');
            require_once('views/templates/footer.php');

        }

    }

?>