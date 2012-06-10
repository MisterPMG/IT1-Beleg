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
                                   case 'Training': $this -> EditTraining();break;
                                   case 'Title': $this -> EditTitle();break;
                                   case 'Branche': $this -> EditBranche();break;
                                   case 'Edit': $this -> EditClient();break;
                           }
                }
                
            function EditClient()
            {
            	$STH = $this-> model-> showDetail();
				$this -> load ->GetView( 'Edit', $STH ); 
            }

            function EditBranche()
            {
            	$STH = $this-> model-> showDetail();
            	$this -> load ->GetView( 'Branche', $STH );
            	if(isset($_POST['Anlegen']))
            	{
            		$STH = $this->model->insertBranche();
            		echo "Branche wurde angelegt";
 
            	}
            }    
           	
			function EditTitle()
			{
				$STH = $this-> model-> showDetail();
				$this -> load ->GetView( 'Title', $STH );
				if(isset($_POST['Anlegen']))
				{
					$STH = $this->model->insertTitle();
					echo "Anrede wurde angelegt";
				}
			}
                
           function ListAllClients()
           {
                           $STH = $this-> model -> getAllClients();
                           $this -> load ->GetView( 'ListAll', $STH );
           }

           function NewClient()
           {
                         $STH = $this-> model-> showDetail();
                         $this -> load ->GetView( 'Create', $STH );
                         if(isset($_POST['Anlegen']))
                         {
                           	$STH = $this->model->insertNewClient();
                         	echo "Kunde wurde angelegt";                        	
                         }
           }
           
           function EditTraining()
           {
           				$STH = $this-> model-> showDetail();
           				$this->load->GetView('Training', $STH);
           				if(isset($_POST['Anlegen']))
           				{
           					$STH = $this->model->insertTraining();
           					echo "Schulung wurde angelegt";
           				}
           }

        }

?>