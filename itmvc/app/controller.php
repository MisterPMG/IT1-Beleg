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
	   			case 'ListAll': $this -> ListAllClients();
	   		}
		}
	   
	   function ListAllClients()
	   {
	   		$STH = $this-> model -> getAllClients();
	   		$this -> load ->GetView( 'ListAll', $STH );
	   }
	   
	}

?>