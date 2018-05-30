<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Klientas extends CI_Controller {

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

	public function paslaugos()
	{
		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('paslaugos');
		$this->load->view('footer');

	}

	public function kontaktai()
	{   
		$duomenys["vardas"]="";
		$duomenys["elpastas"]="";
		$duomenys["telnr"]="";
		$duomenys["zinute"]="";

		$this->load->library('form_validation');

		$this->form_validation->set_rules('vardas', 'vardas', 'trim|required|min_length[3]|max_length[15]' );
		$this->form_validation->set_rules('elpastas', 'el.paštas', 'required|valid_email' );
		$this->form_validation->set_rules('telnr', 'tel.nr', 'trim|required|integer|exact_length[9]' );
		$this->form_validation->set_rules('zinute', 'jūsų žinutė', 'trim|required|min_length[20]|max_length[1000]' );
		  if ($this->form_validation->run() !== false) {

		$this->load->library('email');
					$this->email->from($this->input->post("elpastas"), 'wonderland');
					$this->email->to('alisajanuskevic@gmail.com');
					//$this->email->cc('another@another-example.com');
					//$this->email->bcc('them@their-example.com');

					$this->email->subject('Nauja užklausa');
					$this->email->message('Sistemoje gauta žinutė: Klientas: '.$this->input->post('vardas').'. Kliento el.paštas: '.$this->input->post('elpastas').'. Kliento telefono numeris: '.$this->input->post('telnr').'. Gauta žinutė: '.$this->input->post('zinute').'.');
					$this->email->send();
					$iterpe =$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Jūsų žinutę gavome!</div>');
					//die();
					redirect();


			} else {

				$duomenys["vardas"]=$this->input->post('vardas');
				$duomenys["elpastas"]=$this->input->post('elpastas');
				$duomenys["telnr"]=$this->input->post('telnr');
				$duomenys["zinute"]=$this->input->post('zinute');


	}

		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('kontaktai', $duomenys);
		$this->load->view('footer');
	}

	

	public function apiemus()
	{
		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('apiemus');
		$this->load->view('footer');
	}


	public function registracija()
	{
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');

		$this->load->database();
		$this->load->model('registracija');
		$this->load->model('paslauga');

		$paslauga = [];
		$paslauga['paslaugoskategorijos1']=$this->paslauga->gautipaslaugaspagalkategorija(1);
		$paslauga['paslaugoskategorijos2']=$this->paslauga->gautipaslaugaspagalkategorija(2);
		$paslauga['paslaugoskategorijos3']=$this->paslauga->gautipaslaugaspagalkategorija(3);
		$paslauga['paslaugoskategorijos4']=$this->paslauga->gautipaslaugaspagalkategorija(4);
		$paslauga['paslaugoskategorijos5']=$this->paslauga->gautipaslaugaspagalkategorija(5);
		$paslauga['paslaugoskategorijos6']=$this->paslauga->gautipaslaugaspagalkategorija(6);
		$paslauga['paslaugoskategorijos7']=$this->paslauga->gautipaslaugaspagalkategorija(7);

		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('registracija_paslaugos', $paslauga);
		$this->load->view('footer');
	}

	public function registracijoslaikas($pas_id, $data=0)
	{
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');

		$this->load->database();
		$this->load->model('registracija');
		$this->load->model('paslauga');
		$this->load->model('darbo_grafikas');

		$paslauga = $this->paslauga->gautipaslaugosinfo($pas_id)[0]; 

		if (!$data) {
			$data = date('y-m-d', time());
		}

		$laikas['pas_id'] = $pas_id;
		$laikas['data'] = $data;
		$grafikas = $this->darbo_grafikas->galimadata($pas_id, $data);
		if (sizeof($grafikas) > 0) {
			$uzimti_laikai = $this->registracija->uzimtilaikai($pas_id, $data);
			
			$laikas['grafikas'] = $this->darbo_grafikas->darbografikas($grafikas[0], $uzimti_laikai, $paslauga, $data);
		}
		else {
			$laikas['grafikas'] = [];
		}

		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('registracija_laikas', $laikas);
		$this->load->view('footer');
	}
	
	public function registravimasispaslaugai($paslaugos_id){
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');

		$this->load->database();
		$this->load->model('registracija');
		$this->load->model('paslauga');
		$this->load->model('darbo_grafikas');

		$paslauga = $this->paslauga->gautipaslaugosinfo($paslaugos_id)[0];
		
		$laikas['darbuotojai'] = $this->darbo_grafikas->paslaugos_tiekejai($paslaugos_id);
		
		$laikas['pas_id'] = $paslaugos_id;
		$laikas['paslauga'] = $paslauga;
		$this->load->library('table');
		$prefs = array(
			'start_day'    => 'monday',
			'month_type'   => 'long',
			'day_type'     => 'short'
		);

		$this->load->library('calendar', $prefs);
		
		$grafikas = $this->darbo_grafikas->datos_paslaugai($paslaugos_id, 0);
		if (sizeof($grafikas) > 0) {
			$dienos = $this->darbo_grafikas->intervalai_i_dienu_masyva($paslaugos_id, 0, $grafikas);
			$laikas['grafikas'] = $dienos;
		}
		else {
			$laikas['grafikas'] = [];
		}
		$laikas['kalendorius'] = $this->load->view('ajax/darbuotoju_datos_registracijai', $laikas, true);

		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('registracija_i_paslauga', $laikas);
		$this->load->view('footer');
	}

	public function ajax_gauti_nuolaida()
	{
		$this->load->database();
		$this->load->model('paslauga');
		$this->load->model('nuolaida');
		
			 $nuolaidele=$this->input->post('kodas');

			 $nuol=$this->nuolaida->gautinuolaidosinfo($nuolaidele);
			if(empty($nuol)){

				$paslaugai['klaida']='Toks nuolaidos kodas neegzistuoja arba yra įvestas neteisingai';

			} else {
				
				$paslaugai['nuolaida']=$nuol[0]->suma;
				$paslaugai['id']=$nuol[0]->nuol_id;
			}

		echo json_encode($paslaugai);
	}
	
	public function ajax_gauti_darbuotojo_darbo_dienas($darbuotojo_id, $paslaugos_id)
	{
		$this->load->helper(array('form', 'url'));
		$this->load->database();
		$this->load->model('darbo_grafikas');
		$this->load->library('table');
		$prefs = array(
			'start_day'    => 'monday',
			'month_type'   => 'long',
			'day_type'     => 'short'
			);
	

		$this->load->library('calendar', $prefs);
		
		$grafikas = $this->darbo_grafikas->datos_paslaugai($paslaugos_id, $darbuotojo_id);
		if (sizeof($grafikas) > 0) {
			$dienos = $this->darbo_grafikas->intervalai_i_dienu_masyva($paslaugos_id, $darbuotojo_id, $grafikas);
			$laikas['grafikas'] = $dienos;
		}
		else {
			$laikas['grafikas'] = [];
		}
		$this->load->view('ajax/darbuotoju_datos_registracijai', $laikas);
	}
	
	public function ajax_gauti_laikus_dienai($pas_id, $darbuotojas, $data){
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
		$this->load->database();
		$this->load->model('registracija');
		$this->load->model('paslauga');
		$this->load->model('darbo_grafikas');

		$paslauga = $this->paslauga->gautipaslaugosinfo($pas_id)[0]; 
		if (!$data) {
			$data = date('y-m-d', time());
		}

		$laikas['pas_id'] = $pas_id;
		$laikas['data'] = $data;
		$grafikas = $this->darbo_grafikas->galimadata($pas_id, $data);
		if (sizeof($grafikas) > 0) {
			$uzimti_laikai = $this->registracija->uzimtilaikai($pas_id, $data);
			$laikas['grafikas'] = $this->darbo_grafikas->darbografikas($grafikas[0], $uzimti_laikai, $paslauga, $data);
		}
		else {
			$laikas['grafikas'] = [];
		}
		$this->load->view('ajax/darbuotoju_laikai_registracijai', $laikas);	
	}

	public function registracijosforma($paslauga)
	{
		$this->load->helper(array('form', 'url'));
        $this->load->helper('date');
        $this->load->library('form_validation');

		$this->load->database();
		$this->load->model('registracija');
		$this->load->model('paslauga');
		$this->load->model('darbuotojas');
		$this->load->model('nuolaida');
	

		if (null !== ($this->input->post ('Registruotis'))) {
		$this->form_validation->set_rules('pateik_data', 'pateikimo data' , 'trim');
		$this->form_validation->set_rules('vardas', 'vardas', 'trim|required|min_length[3]|max_length[15]' );
		$this->form_validation->set_rules('pavarde', 'pavardė', 'trim|required|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('data', 'data' , 'required');
		$this->form_validation->set_rules('laikas', 'laikas', 'required' );
		$this->form_validation->set_rules('el_past', 'el.paštas', 'required|valid_email' );
		$this->form_validation->set_rules('tel_nr', 'tel.nr', 'trim|required|integer|exact_length[9]' );
		$this->form_validation->set_rules('pastab', 'pastaba apie užsakymą', 'trim|max_length[1000]' );
		$iterpe = false;

 				$laikas = $this->input->post('laikas');
				$tabelis= $this->input->post('tabelis');

	    if ($this->form_validation->run() !== false) {

			$this->registracija->pas_id = $paslauga;
			$this->registracija->tabel_nr_id = $tabelis;
			$this->registracija->pateik_data= date("y-m-d h:i:s");
			$this->registracija->atlik_data= $this->input->post('data')." ".$laikas;
			$this->registracija->busena= 0;
			$this->registracija->kl_vard = $this->input->post('vardas');
			$this->registracija->kl_pav = $this->input->post('pavarde');
			$this->registracija->el_past = $this->input->post('el_past');
			$this->registracija->kl_tel_nr = $this->input->post('tel_nr');
			$this->registracija->pastab = $this->input->post('pastab');

			$nuolaidos_id = $this->input->post("nuolaidos_kodas");
			$this->registracija->nuol_id = $nuolaidos_id;


//is db gauti paslaugos kaina pagal paslaugos id
			
			$paslaugos_kaina=$this->paslauga->gautipaslaugoskaina($paslauga);

//paskaiciuoti suma su nuolaida
			if($nuolaidos_id>0){

				$nuolaidos_suma=$this->nuolaida->gautinuolaidossuma($nuolaidos_id);

				$this->registracija->uzsk_suma =$paslaugos_kaina [0]->kaina - $nuolaidos_suma[0]->suma;


			}else {

				$this->registracija->uzsk_suma =$paslaugos_kaina [0]->kaina;

			}
			$bendra_suma = sprintf('%0.2f',$this->registracija->uzsk_suma);
			$registracijos_id = $this->registracija->iterptinaujaregistracija();


			if($registracijos_id >0) {
				echo "iterpimas";

						$laikas=$this->input->post('laikas');

					$this->load->library('email');
					$this->email->from('alisajanuskevic@gmail.com', 'Wonderland');
					$this->email->to($this->registracija->el_past);
					//$this->email->cc('another@another-example.com');
					//$this->email->bcc('them@their-example.com');

					$this->email->subject('Vizitas į grožio saloną');
					$paslaugos_pav=$this->paslauga->gautipaslaugosinfo($paslauga);
					$this->email->message('Sveiki! Jūs užsiregistravote į paslaugą: ' .$paslaugos_pav[0]->pasl_pav.
					 		'. Lauksime jūsų: ' .$this->input->post('data'). " " .$laikas.  ' val. Vizito kaina: '.$bendra_suma. 
					 		' €. Norėdami atšaukti vizitą - spauskite nuorodą: http://rude.su.lt/~ramanauskaite/ALISA/index.php/klientas/atsauktivizita/'.$registracijos_id .'. Atšaukimas galimas likus ne mažiau kaip 24 val. iki vizito laiko. ');

					$this->email->send();

				 $iterpe =$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Jūsų registracija sėkminga!!!</div>');
	                redirect('');
			}
	    }
	
	}

	    if ($this->form_validation->run() == false || $iterpe==false) {

			$paslauga_v['paslaugoskategorijos1']=$this->paslauga->gautipaslaugaspagalkategorija(1);
			$paslauga_v['paslaugoskategorijos2']=$this->paslauga->gautipaslaugaspagalkategorija(2);
			$paslauga_v['paslaugoskategorijos3']=$this->paslauga->gautipaslaugaspagalkategorija(3);
			$paslauga_v['paslaugoskategorijos4']=$this->paslauga->gautipaslaugaspagalkategorija(4);
			$paslauga_v['paslaugoskategorijos5']=$this->paslauga->gautipaslaugaspagalkategorija(5);
			$paslauga_v['paslaugoskategorijos6']=$this->paslauga->gautipaslaugaspagalkategorija(6);
			$paslauga_v['paslaugoskategorijos7']=$this->paslauga->gautipaslaugaspagalkategorija(7);
			$paslauga_v['vardas']=$this->input->post('vardas');
			$paslauga_v['pavarde']=$this->input->post('pavarde');
			$paslauga_v['el_past']=$this->input->post('el_past');
			$paslauga_v['tel_nr']=$this->input->post('tel_nr');
			$paslauga_v['pastab']=$this->input->post('pastab');

			$paslauga_v['data'] = $_REQUEST['data'];
			
			$masyvas = explode('-', $_REQUEST['laikas']);
			if(sizeof($masyvas)>1) {
     			list($laikas, $tabelis) = explode('-', $_REQUEST['laikas']);
	 			$paslauga_v['laikas'] = $laikas;
			 	$paslauga_v['tabelis'] = $tabelis;
			} else  { 
   				$paslauga_v['laikas'] = $this->input->post('laikas');
				$paslauga_v['tabelis'] = $this->input->post('tabelis');
					}

			$betkas=$this->paslauga->gautipaslaugosinfo($paslauga); 
			if( sizeof($betkas)>0){
				$paslauga_v['paslaugosinfo']=$betkas[0];	
			}
			else {
				$paslauga_v['paslaugosinfo']= new paslauga();
			}

			$paslauga_v['darbuotojo_duomenys']=$this->darbuotojas->gautiduomenis($paslauga_v['tabelis'])[0];

			$this->load->model('darbo_grafikas');

			$this->load->view('head1');
			$this->load->view('meniu');
			$this->load->view('registracija', $paslauga_v);
			$this->load->view('footer');
		}
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

	        	redirect('klientas/visosregistracijos');

	        } else {

	        	redirect('');
	        }
	}

	public function kategorija($kat_id)
	{
		$this->load->database();

		$this->load->model('paslauga');
		$this->load->model ('darbuotojas');
		$paslauga['kategorijospavadinimas']=$this->paslauga->gautikategorijapagaljosid($kat_id);
		$paslauga['paslaugoskategorijos']=$this->paslauga->gautipaslaugaspagalkategorija($kat_id);

		$this->load->view('head1');
		$this->load->view('meniu');
		$this->load->view('kategorija', $paslauga);
		$this->load->view('footer');

	}
	
    public function pagalba()
	{	$this->load->database();
		$this->load->view('headinstrukcija');
		$this->load->view('meniu');
		$this->load->view('pagalba');
		$this->load->view('footerinstrukcija');
		
	}

	public function reginstrukcija()
	{	
		$this->load->view('headinstrukcija');
		$this->load->view('meniu');
		$this->load->view('reginstrukcija');
		$this->load->view('footerinstrukcija');
		
	}

	public function regatsauk()
	{	
		$this->load->view('headinstrukcija');
		$this->load->view('meniu');
		$this->load->view('regatsauk');
		$this->load->view('footerinstrukcija');
		
	}



}