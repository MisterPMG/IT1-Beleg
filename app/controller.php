<?php

        class Controller {
                public $load;
                public $model;

                function __construct()
                {
                        $this->load = new Load();
                        $this->model = new Model();
                }
                function exec( $functionName )
                {
                           switch ( $functionName )
                           {
                                   case 'ListAll': $this -> ListAllClients();break;
                                   case 'Create': $this -> NewClient();break;
                           }
                }

           function ListAllClients()
           {
                           $STH = $this-> model -> getAllClients();
                           $this -> load ->GetView( 'ListAll', $STH );
           }

           function NewClient()
           {
           				 
                         $STH = $this-> model-> insertNewClient();
                         
                         $this -> load ->GetView( 'Create', $STH );
           }

        }

?>