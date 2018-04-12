<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	//contructor
	public function __construct()
		{
			parent ::__construct();

			$this->load->model('model_inicio');

		}
	


	public function index()
	{
		$vector['motos']= $this->model_inicio->ranking_descendente();
		$this->load->view('inicio',$vector);
	}


	public function moto_inicio()
	{
		$x= $this->model_inicio->ranking_descendente();
		
		$x=json_encode($x);
		echo $x;
	}
}
