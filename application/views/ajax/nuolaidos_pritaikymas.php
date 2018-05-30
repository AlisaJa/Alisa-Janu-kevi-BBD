
<?php
	$this->load->model('nuolaida');


		if (null !==($this->input->post('Pritaikyti'))){

			print_r($gautinuolaidosinfo);

			$nuolaidele=$this->input->post('nuolaidos_pavadinimas');
			$nuol=$this->nuolaida->gautiNuolaidosInfo($nuolaidele);
		
		if(empty($nuol)){

				$Paslauga['klaida']='Toks nuolaidos kodas neegzistuoja arba yra įvestas neteisingai';

		} else {

				$Paslauga['nuolaida']=$nuol[0]->suma;

		}
	}

	echo json_encode($Paslauga);
?>
