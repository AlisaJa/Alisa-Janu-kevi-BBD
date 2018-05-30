<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Adminas extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
	}

	/**
	 * index page for this controller.
	 *
	 * maps to the following url
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * so any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()

	{	$this->load->database();
		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('main');
		$this->load->view('footer');		
	}

	public function atsauktivizita($reg_id, $busena=1)
	{
		$this->load->database();
		$this->load->model('registracija');


		if($busena==1){

			$registracija = $this->registracija->gautiregistracija($reg_id);

			$dabar=new datetime();
            $dabar->add(new dateinterval('P1D'));

            if($dabar > new datetime($registracija[0]->atlik_data)){

            	$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Atšaukimas negalimas</div>');
            	redirect('');
            }
		}

		$this->registracija->klientoatsaukimas($reg_id, $busena); 

		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Jūsų registracija atšaukta!!!</div>');

	        if ($busena==2){

	        	redirect('adminas/visosregistracijos');

	        } else {

	        	redirect('');
	        }
	}

	public function visosregistracijos()
	{
		$this->load->database();
		$this->load->model('darbuotojas');
		$this->load->model('registracija');
		$tabel_nr_id = $this->session->userdata['tabel_nr_id']; 

		$manoreg['manoreg']=$this->registracija->gautimanoregistracija($tabel_nr_id);

		$manoreg['regtvarkymas']=$tabel_nr_id<=2;

		$vard['vard']=$this->darbuotojas->gautivarda($tabel_nr_id); 
		$pavarde['pav']=$this->darbuotojas->gautipavarde($tabel_nr_id);

		$pareigos['pareigos']=$this->darbuotojas->gautipareigas($tabel_nr_id);

		$pareigos['darbuotojai']=$this->darbuotojas->gautidarbduomenis();

		$this->load->view('head1');
		$this->load->view('meniul', $vard);
		$this->load->view('mainl', array_merge($manoreg, $pareigos));
		$this->load->view('footer');
	}

	

	public function login()
	{
		$this->load->database();
		$this->load->model('darbuotojas');
		$this->darbuotojas->tabel_nr_id = $this->input->post('tabel_nr_id');
		 	$this->darbuotojas->slapt = $this->input->post('slapt');
		 	$tikrinti = $this->darbuotojas->prisijungti();

		 	if ($tikrinti != false) {
		 		$this->session->set_userdata('tabel_nr_id', $tikrinti[0]->tabel_nr_id);

		 		echo '<script>alert("Sveikinu sėkmingai prisijungus!");</script>';
		 		redirect('adminas/visosregistracijos', 'refresh'); 
		 	}

		 	else {

		 		$nesekme['klaida_login']=' ';

		 		if($this->input->post('login')){

		 		$nesekme['klaida_login']='Neteisingi prisijungimo duomenys';
		 	}

		$this->load->view('head1');
		$this->load->view('login', $nesekme);
		$this->load->view('footer');

				}
	}

	public function manoduom()
	{ 

		$tabel_nr_id = $this->session->userdata['tabel_nr_id'];

		$this->load->database();
		$this->load->model('darbuotojas');
		$this->load->model('paslauga');

		$darbuotojas['darbuotojas']=$this->darbuotojas->gautiduomenis($tabel_nr_id);

			if($tabel_nr_id>2){

				$darbuotojas['darbuotojopaslaugos']=$this->paslauga->gautiatliekamaspaslaugas($tabel_nr_id);

			}

		$this->load->model('darbo_grafikas');

		$darbuotojas['darbografikas']=$this->darbo_grafikas->gautidarbografika($tabel_nr_id);

		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('manoduom', $darbuotojas);
		$this->load->view('footer');
	}

	public function grafikai()
	{ 
		$tabel_nr_id = $this->session->userdata['tabel_nr_id'];
		
		$this->load->database();
		$this->load->model('darbo_grafikas');

			$darbuotojas['darbografikas']=$this->darbo_grafikas->gautidarbografika($tabel_nr_id);
 
		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('grafikai', $darbuotojas);
		$this->load->view('footer');
	}

	public function grafikai_perziura()

	{   

		if($this->session->userdata['tabel_nr_id']>2){ 
				redirect("adminas/visosregistracijos");
		}
		
		$this->load->database();
		$this->load->model('darbo_grafikas');
		$this->load->model('darbuotojas');

		$tabel_nr_id = $this->session->userdata['tabel_nr_id'];
		$darbuotojas['graftvarkymas']=$tabel_nr_id<=2; 

		$darbuotojas['darbografikas']=$this->darbo_grafikas->gautidarbografikus();
		$darbuotojas['darbuotojai']=$this->darbuotojas->gautidarbduomenis();
 
		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('grafikai_perziura', $darbuotojas);
		$this->load->view('footer');
	}

	public function grafikai_ivedimas()
	{ 
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');
		
		$this->load->database();
		$this->load->model('darbo_grafikas');
		$this->load->model('darbuotojas');

		$darbuotojas['darbuotojai']=$this->darbuotojas->gautidarbduomenis();

		$this->form_validation->set_rules('tabel_nr_id', 'darbuotojas', 'required' );
		$this->form_validation->set_rules('data_iki', 'data_iki', 'required|callback_datulyginimas');
		$this->form_validation->set_rules('data_nuo', 'data_nuo' , 'required');
		$this->form_validation->set_rules('grafiko_pavadinimas', 'pavadinimas', 'trim|required|min_length[3]|max_length[40]' );
		$this->form_validation->set_rules('laikas_nuo', 'laikas_nuo', 'required' );
		$this->form_validation->set_rules('laikas_iki', 'laikas_iki', 'required|callback_laikulyginimas' );

		if ($this->form_validation->run() !== false) {

			$this->darbo_grafikas->tabel_nr_id = $this->input->post('tabel_nr_id');
			$this->darbo_grafikas->darbo_data_iki = $this->input->post('data_iki');
			$this->darbo_grafikas->darb_dat_nuo = $this->input->post('data_nuo');
			$this->darbo_grafikas->laikas_iki= $this->input->post('laikas_iki');
			$this->darbo_grafikas->laikas_nuo= $this->input->post('laikas_nuo');
			$this->darbo_grafikas->dg_pav = $this->input->post('grafiko_pavadinimas');

			$darbuotojas = $this->darbo_grafikas->iterptiNaujaGrafika();

			$this->session->set_flashdata('msg', 'Grafikas sukurtas!');
			redirect ('adminas/grafikai_ivedimas', 'refresh');

	    } else {

		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('grafikai_ivedimas', $darbuotojas);
		$this->load->view('footer');
	}

	}
	function datulyginimas() {
	  $startDate = strtotime($_POST['data_nuo']);
	  $endDate = strtotime($_POST['data_iki']);

	  if ($endDate >= $startDate)
	    return True;
	
	  else {

	    $this->form_validation->set_message('datulyginimas','Data nuo negali būti didesnė nei data iki');

	    return False;
	  }
	}
	function laikulyginimas() {
	  $startDate = strtotime($_POST['laikas_nuo']);
	  $endDate = strtotime($_POST['laikas_iki']);

	  if ($endDate >= $startDate)
	    return True;
	
	  else {

	    $this->form_validation->set_message('laikulyginimas','Laikas nuo negali būti didesnis nei laikas iki');

	    return False;
	  }
	}


	public function grafikai_redag($redagavimas)
	{
		$this->load->database();
		$this->load->model('darbo_grafikas');
		$this->load->model('darbuotojas');


		$dg_id=$redagavimas;

		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('dg_pav', 'dg_pav', 'trim|required|min_length[3]|max_length[15]' );
		$this->form_validation->set_rules('darb_dat_nuo', 'darb_dat_nuo');
		$this->form_validation->set_rules('darbo_data_iki', 'darbo_data_iki');
		$this->form_validation->set_rules('laikas_nuo', 'laikas_nuo' );
		$this->form_validation->set_rules('laikas_iki', 'laikas_iki' );

		$grafikuduomenys['grafikuduomenys']=$this->darbo_grafikas->gautigrafika($dg_id)[0];
		$darbduom ['darbuotojai']=$this->darbuotojas->gautidarbduomenis();

			if ($this->form_validation->run() == false){

			$this->load->view('head1');
			$this->load->view('meniul');
			$this->load->view('grafikai_redag', array_merge($grafikuduomenys, $darbduom));
			$this->load->view('footer');}

			else {
					$this->load->database();
					$this->load->model('registracija');
					
					
					$this->darbo_grafikas->tabel_nr_id=$this->session->userdata['tabel_nr_id'];

					$dg_id=$grafikuduomenys['grafikuduomenys']->dg_id;

					$this->darbo_grafikas->dg_id=$grafikuduomenys['grafikuduomenys']->dg_id;
					$this->darbo_grafikas->dg_pav=$grafikuduomenys['grafikuduomenys']->dg_pav;					
					$this->darbo_grafikas->darb_dat_nuo = $grafikuduomenys['grafikuduomenys']->darb_dat_nuo;
					$this->darbo_grafikas->darbo_data_iki = $grafikuduomenys['grafikuduomenys']->darbo_data_iki;
					$this->darbo_grafikas->laikas_nuo = $grafikuduomenys['grafikuduomenys']->laikas_nuo;
					$this->darbo_grafikas->laikas_iki = $grafikuduomenys['grafikuduomenys']->laikas_iki;
					$this->darbo_grafikas->tabel_nr_id = $grafikuduomenys['grafikuduomenys']->tabel_nr_id;

					$this->darbo_grafikas->dg_pav = $this->input->post('dg_pav');
					$this->darbo_grafikas->darb_dat_nuo = $this->input->post('darb_dat_nuo');
					$this->darbo_grafikas->darbo_data_iki = $this->input->post('darbo_data_iki');
					$this->darbo_grafikas->laikas_nuo = $this->input->post('laikas_nuo');
					$this->darbo_grafikas->laikas_iki = $this->input->post('laikas_iki');
					$this->darbo_grafikas->tabel_nr_id = $this->input->post('tabel_nr_id');

					$this->darbo_grafikas->atnaujintigrafika($dg_id);
					redirect ('adminas/grafikai_perziura', 'refresh');

                }

		}

	public function naujas_darbuotojas()
	{ 
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		
		$this->load->database();
		$this->load->model('darbuotojas');

		$duomenys["vard"]="";
		$duomenys["pav"]="";
		$duomenys["tel_nr"]="";
		$duomenys["pareigos"]="";


		$this->form_validation->set_rules('vard', 'Vardas', 'required');
		$this->form_validation->set_rules('pav', 'Pavardė' , 'required');
		$this->form_validation->set_rules('pareigos', 'Pareigos', 'required' );
		$this->form_validation->set_rules('asm_k', 'Asmens kodas', 'trim|required|integer|exact_length[11]' );
		$this->form_validation->set_rules('tel_nr', 'Telefono numeris', 'trim|required|integer|exact_length[9]' );
		$this->form_validation->set_rules('adr', 'Adresas', 'required' );
		$this->form_validation->set_rules('slapt', 'Slaptažodis', 'required' );


		if ($this->form_validation->run() !== false) {

			$this->darbuotojas->vard = $this->input->post('vard');
			$this->darbuotojas->pav = $this->input->post('pav');
			$this->darbuotojas->pareigos= $this->input->post('pareigos');
			$this->darbuotojas->asm_k= $this->input->post('asm_k');
			$this->darbuotojas->tel_nr = $this->input->post('tel_nr');
			$this->darbuotojas->adr = $this->input->post('adr');
			$this->darbuotojas->slapt = $this->input->post('slapt');

			print_r($duomenys);


			$this->darbuotojas->iterptinaujadarbuotoja();

			$this->session->set_flashdata('msg', 'Darbuotojas sukurtas!');
			redirect ('adminas/naujas_darbuotojas', 'refresh');

	    } else {

	    $duomenys["vard"]=$this->input->post('vard');
		$duomenys["pav"]=$this->input->post('pav');
		$duomenys["tel_nr"]=$this->input->post('tel_nr');
		$duomenys["pareigos"]=$this->input->post('pareigos');
		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('naujas_darbuotojas', $duomenys);
		$this->load->view('footer');

	}

	}

	public function asmduomenys()

	{   $tabel_nr_id=$this->session->userdata['tabel_nr_id'];


		$this->load->database();
		$this->load->model('darbuotojas');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('vard', 'vard', 'trim|required|min_length[3]|max_length[15]' );
		$this->form_validation->set_rules('pav', 'pav', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('tel_nr', 'tel_nr', 'trim|required|integer|exact_length[9]' );
		$this->form_validation->set_rules('adr', 'adr', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('slapt', 'slapt', 'trim|required' );

		$asmeniniaiduomenys['asmeniniaiduomenys']=$this->darbuotojas->gautiDuomenis($tabel_nr_id)[0];

		if ($this->form_validation->run() == false){

			$this->load->view('head1');
			$this->load->view('meniul');
			$this->load->view('asmduomred', $asmeniniaiduomenys);
			$this->load->view('footer');}

		else {

			$this->load->database();
			$this->load->model('darbuotojas');
			$this->darbuotojas->vard=$this->input->post('vard');
			$this->darbuotojas->pav=$this->input->post('pav');
			$this->darbuotojas->tel_nr=$this->input->post('tel_nr');
			$this->darbuotojas->adr=$this->input->post('adr');
			$this->darbuotojas->slapt=$this->input->post('slapt');

			$this->darbuotojas->tabel_nr_id=$this->session->userdata['tabel_nr_id'];

			$this->darbuotojas->pareigos=$asmeniniaiduomenys['asmeniniaiduomenys']->pareigos;
			$this->darbuotojas->asm_k=$asmeniniaiduomenys['asmeniniaiduomenys']->asm_k;
			$this->darbuotojas->atnaujintidarbuotoja($tabel_nr_id);
			redirect ('adminas/manoduom', 'refresh');


		}

	}


	public function atsijungti()
    {
                $this->session->unset_userdata('tabel_nr_id', null);
                redirect('adminas/login', 'refresh');
    }

    public function pagalba()
	{	$this->load->database();
		$this->load->view('headinstrukcija');
		$this->load->view('meniu');
		$this->load->view('pagalba');
		$this->load->view('footerinstrukcija');
		
	}

	public function regatsauk()
	{	
		$this->load->view('headinstrukcija');
		$this->load->view('meniu');
		$this->load->view('regatsauk');
		$this->load->view('footerinstrukcija');
		
	}

	public function registracijuredagavimas($redagavimas)
	{
		$this->load->database();
		$this->load->model('registracija');

		$reg_id=$redagavimas;

		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('kl_vard', 'Kliento vardas', 'trim|required|min_length[3]|max_length[15]' );
		$this->form_validation->set_rules('kl_pav', 'Kliento pavardė', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('data', 'Data', 'required');
		$this->form_validation->set_rules('laikas', 'Laikas');
		$this->form_validation->set_rules('el_past', 'El. paštas', 'required|valid_email' );
		$this->form_validation->set_rules('kl_tel_nr', 'Telefono numeris', 'trim|required|integer|exact_length[9]' );
		$this->form_validation->set_rules('pastab', 'Pastabos' );
		$this->form_validation->set_rules('tabel_nr_id', 'Tabelio numeris', 'trim|required' );

		$registracijuduomenys['registracijuduomenys']=$this->registracija->gautiregistracija($reg_id)[0];

			if ($this->form_validation->run() == false){

			$this->load->view('head1');
			$this->load->view('meniul');
			$this->load->view('registracijuredagavimas', $registracijuduomenys);
			$this->load->view('footer');}

			else {
					$this->load->database();
					$this->load->model('registracija');
					
					$this->registracija->tabel_nr_id = $this->input->post('tabel_nr_id');
					$this->registracija->atlik_data= $this->input->post('data')." ".$this->input->post('laikas');					
					$this->registracija->kl_vard = $this->input->post('kl_vard');
					$this->registracija->kl_pav = $this->input->post('kl_pav');
					$this->registracija->el_past = $this->input->post('el_past');
					$this->registracija->kl_tel_nr = $this->input->post('kl_tel_nr');
					$this->registracija->pastab = $this->input->post('pastab');
					$this->registracija->uzsk_suma = $this->input->post('uzsk_suma');
					$this->registracija->nuol_id = $this->input->post('nuol_id');

					$this->registracija->tabel_nr_id=$this->session->userdata['tabel_nr_id'];

					$reg_id=$registracijuduomenys['registracijuduomenys']->reg_id;

					$this->registracija->reg_id=$registracijuduomenys['registracijuduomenys']->reg_id;
					$this->registracija->busena=$registracijuduomenys['registracijuduomenys']->busena;					
					$this->registracija->pas_id = $registracijuduomenys['registracijuduomenys']->pas_id;
					$this->registracija->busena = $registracijuduomenys['registracijuduomenys']->nuol_id;
					$this->registracija->pateik_data = $registracijuduomenys['registracijuduomenys']->pateik_data;
					$this->registracija->uzsk_suma = $registracijuduomenys['registracijuduomenys']->uzsk_suma;
					$this->registracija->nuol_id = $registracijuduomenys['registracijuduomenys']->nuol_id;

					$this->registracija->atnaujintiregistracija($reg_id);
					redirect ('adminas/visosregistracijos', 'refresh');

                }

		}

		public function nuolaidos_sukurimas()
	{ 
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');
		
		$this->load->database();
		$this->load->model('nuolaida');

		$this->form_validation->set_rules('nuol_data_iki', 'nuol_data_iki', 'required|callback_datulyginimasnuolaidai');
		$this->form_validation->set_rules('nuol_data_nuo', 'nuol_data_nuo' , 'required');
		$this->form_validation->set_rules('nuol_pav', 'nuol_pav', 'trim|required|min_length[3]|max_length[40]' );
		$this->form_validation->set_rules('suma', 'suma', 'required' );
		$this->form_validation->set_rules('rusis', 'rusis', 'required' );


		if ($this->form_validation->run() !== false) {

			$this->nuolaida->nuol_data_iki = $this->input->post('nuol_data_iki');
			$this->nuolaida->nuol_data_nuo = $this->input->post('nuol_data_nuo');
			$this->nuolaida->suma= $this->input->post('suma');
			$this->nuolaida->rusis= $this->input->post('rusis');
			$this->nuolaida->nuol_pav = $this->input->post('nuol_pav');

			$nuolaidaa = $this->nuolaida->iterptinaujanuolaida();

			$this->session->set_flashdata('msg', 'Nuolaida sukurta!');
			redirect ('adminas/nuolaidos_sukurimas', 'refresh');

	    } else {

		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('nuolaidos_sukurimas');
		$this->load->view('footer');
	}

	}
	function datulyginimasnuolaidai() {
	  $startDate = strtotime($_POST['nuol_data_nuo']);
	  $endDate = strtotime($_POST['nuol_data_iki']);

	  if ($endDate >= $startDate){
	    return True;}
	
	  else {

	    $this->form_validation->set_message('datulyginimasnuolaidai','Data nuo negali būti didesnė nei data iki');

	    return False;
	  }
	}

	public function nuolaidu_perziura()

	{   

		if($this->session->userdata['tabel_nr_id']>2){ 
				redirect("adminas/visosregistracijos");
		}
		
		$this->load->database();
		$this->load->model('nuolaida');

		$tabel_nr_id = $this->session->userdata['tabel_nr_id'];
		$nuolaidaa['tvarkymas']=$tabel_nr_id<=2; 

		$nuolaidaa['nuolaidaa']=$this->nuolaida->gautinuolaidas();
 
		$this->load->view('head1');
		$this->load->view('meniul');
		$this->load->view('nuolaidu_perziura', $nuolaidaa);
		$this->load->view('footer');
	}


	public function nuolaidos_redag($redagavimas)
	{
		$this->load->database();
		$this->load->model('nuolaida');

		$nuol_id=$redagavimas;

		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->form_validation->set_rules('nuol_pav', 'nuol_pav', 'trim|required|min_length[3]|max_length[15]' );
		$this->form_validation->set_rules('nuol_data_nuo', 'nuol_data_nuo');
		$this->form_validation->set_rules('nuol_data_iki', 'nuol_data_iki');
		$this->form_validation->set_rules('suma', 'suma');
		$this->form_validation->set_rules('rusis', 'rusis', 'required' );

		$nuolaiduduomenys['nuolaiduduomenys']=$this->nuolaida->gautinuolaida($nuol_id)[0];

			if ($this->form_validation->run() == false){

			$this->load->view('head1');
			$this->load->view('meniul');
			$this->load->view('nuolaidos_redag', $nuolaiduduomenys);
			$this->load->view('footer');}

			else {
					$this->load->database();
					$this->load->model('nuolaida');

					$nuol_id=$nuolaiduduomenys['nuolaiduduomenys']->nuol_id;

					$this->nuolaida->nuol_id=$nuolaiduduomenys['nuolaiduduomenys']->nuol_id;
					$this->nuolaida->nuol_pav=$nuolaiduduomenys['nuolaiduduomenys']->nuol_pav;					
					$this->nuolaida->nuol_data_nuo = $nuolaiduduomenys['nuolaiduduomenys']->nuol_data_nuo;
					$this->nuolaida->nuol_data_iki = $nuolaiduduomenys['nuolaiduduomenys']->nuol_data_iki;
					$this->nuolaida->suma = $nuolaiduduomenys['nuolaiduduomenys']->suma;
					$this->nuolaida->rusis = $nuolaiduduomenys['nuolaiduduomenys']->rusis;

					$this->nuolaida->nuol_id = $nuol_id;					
					$this->nuolaida->nuol_pav = $this->input->post('nuol_pav');
					$this->nuolaida->nuol_data_nuo = $this->input->post('nuol_data_nuo');
					$this->nuolaida->nuol_data_iki = $this->input->post('nuol_data_iki');
					$this->nuolaida->suma = $this->input->post('suma');
					$this->nuolaida->rusis = $this->input->post('rusis');

					$this->nuolaida->atnaujintinuolaida($nuol_id);
					redirect ('adminas/nuolaidu_perziura', 'refresh');

                }
		}

		public function regtrynimas($reg_id){


			$this->load->database();
			$this->load->model('registracija');

			$this->load->view('head1');
			$this->load->view('meniul');
			$this->load->view('mainl');
			$this->load->view('footer');

			$this->registracija->istrintiregistracija($reg_id);
			redirect ('adminas/visosregistracijos', 'refresh');
		}

		public function pagalbadarb()

	{	$this->load->database();
		$this->load->view('headinstrukcija');
		$this->load->view('meniul');
		$this->load->view('pagalbadarb');
		$this->load->view('footerinstrukcija');
		
	}

	public function reginstrukcijadarb()
	{	
		$this->load->view('headinstrukcija');
		$this->load->view('meniul');
		$this->load->view('reginstrukcijadarb');
		$this->load->view('footerinstrukcija');
		
	}

	public function instrukcijaasmduom()
	{	
		$this->load->view('headinstrukcija');
		$this->load->view('meniul');
		$this->load->view('instrukcijaasmduom');
		$this->load->view('footerinstrukcija');
		
	}

	public function instrukcijaatsijungti()
	{	
		$this->load->view('headinstrukcija');
		$this->load->view('meniul');
		$this->load->view('instrukcijaatsijungti');
		$this->load->view('footerinstrukcija');
		
	}

}