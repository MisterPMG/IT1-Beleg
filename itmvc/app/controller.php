<?php

	class Controller {
	   public $load;
	   public $model;
	
	   function __construct()
	   {
	      $this->load = new Load();
	      $this->model = new Model();

	   }   
	   
	   function ShowTestView()
	   {
	   		load.ShowView('times.php');
	   }
	   
	}

?>