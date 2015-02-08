<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marca extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
            $res['view'] = $this->load->view('marcas','', TRUE);
            $res['slidebar'] = $this->load->view('slidebar','',TRUE);                           
            $this->load->view('templates/dashboard',$res);              
	}
        
	public function get_crud()
	{
            $this->config->load('grocery_crud');
            $this->config->set_item('grocery_crud_dialog_forms',true);

                $crud = new grocery_CRUD();
                $marca_name = $this->input->post('marca_name');                
                if(!empty($marca_name)){
                    $crud->like('UPPER(nombre)',  strtoupper($marca_name));    
                }
                                
                $crud->set_theme('datatables2');
                $crud->set_table('billing_marca');
//                $crud->columns('codigo','nombre','descripcion','vista_web','meses_garantia','activo');
                $crud->set_subject('Marca');

                $output = $crud->render();                     
                $this->load->view('crud_view_datatable',$output);     
              
	}

}