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
            
            //edit kunde    
            function EditClient()
            {
            	if(isset($_POST['Ändern']))
				{
					$STH=$this->model->updateClient();
					echo "Kunde wurde geändert";
				} 
            	$STH_one = $this-> model-> getClient();
            	$STH_two = $this->model->showDetail();
            	$STH=array(
            		'getClient'=>$STH_one,
            		'showDetail'=>$STH_two
            	);
				$this -> load ->GetView( 'Edit', $STH );
				
            }

			//neue branche
            function EditBranche()
            {
            	if(isset($_POST['Anlegen']))
            	{
            		$STH = $this->model->insertBranche();
            		echo "Branche wurde angelegt";
 
            	}
            	$STH = $this-> model-> showDetail();
            	$this -> load ->GetView( 'Branche', $STH );
            }    
           	
           	//neue anrede
			function EditTitle()
			{
				if(isset($_POST['Anlegen']))
				{
					$STH = $this->model->insertTitle();
					echo "Anrede wurde angelegt";
				}
				$STH = $this-> model-> showDetail();
				$this -> load ->GetView( 'Title', $STH );
				
			}
           
           //alle kunden anzeigen
           function ListAllClients()
           {
                           $STH = $this-> model -> getAllClients();
                           $this -> load ->GetView( 'ListAll', $STH );
           }
			
		   //neuen kunden anlegen
           function NewClient()
           {
                         if(isset($_POST['Anlegen']))
                         {
                           	$STH = $this->model->insertNewClient();
                         	echo "Kunde wurde angelegt";                        	
                         }
                         $STH = $this-> model-> showDetail();
                         $this -> load ->GetView( 'Create', $STH );
                         
                         
           }
           
           //schulung anlegen
           function EditTraining()
           {
           				if(isset($_POST['Anlegen']))
           				{
           					$STH = $this->model->insertTraining();
           					echo "Schulung wurde angelegt";
           				}
           				$STH = $this-> model-> showDetail();
           				$this->load->GetView('Training', $STH);
           				
           }

        }

?>