<?php
class Darbo_grafikas extends CI_Model {


        public $tabel_nr_id;
        public $darbo_data_iki;
        public $darb_dat_nuo;
        public $dg_id;
        public $dg_pav;
        Public $laikas_iki;
        Public $laikas_nuo;


        public function iterptiNaujaGrafika()
        {

                    $this->db->insert('darbo_grafikas', $this);

                    return $this->db->insert_id();      
        }


        public function gautiDarboGrafika($tabel_nr_id)
        {
                
                $this->db->SELECT('dg_pav, darb_dat_nuo, darbo_data_iki, laikas_nuo, laikas_iki');
                $this->db->FROM('darbo_grafikas');
                $this->db->WHERE('darbo_grafikas.tabel_nr_id', $tabel_nr_id);
                $query=$this->db->get();
                return $query->result();
        } 



        public function gautiDarboGrafikus()
        {
                
                $this->db->SELECT('dg_id, darbuotojas.tabel_nr_id, vard, pav, dg_pav, darb_dat_nuo, darbo_data_iki, laikas_nuo, laikas_iki');
                $this->db->FROM('darbo_grafikas');
                $this->db->JOIN('darbuotojas', 'darbo_grafikas.tabel_nr_id=darbuotojas.tabel_nr_id');

                    if(isset($_POST['data_iki']) && trim($_POST['data_iki'])!=""){

               $this->db->WHERE('darbo_grafikas.darb_dat_nuo <=', $_POST['data_iki']);
            }
                    if(isset($_POST['data_nuo']) && trim($_POST['data_nuo'])!=""){

                $this->db->WHERE('darbo_grafikas.darbo_data_iki >=', $_POST['data_nuo']);
            }
                    if(isset($_POST['tabel_nr_id']) && $_POST['tabel_nr_id']>0){
                $this->db->WHERE('darbuotojas.tabel_nr_id', $_POST['tabel_nr_id']);
            }

                $this->db->ORDER_BY('darb_dat_nuo, darbo_data_iki');
                $query=$this->db->get();
                return $query->result();
        }

        public function galimaData($paslauga, $data)
        {
            $this->db->SELECT('darb_dat_nuo, darbo_data_iki, laikas_nuo, laikas_iki, suteikia.tabel_nr_id'); 
            $this->db->FROM('darbo_grafikas');
            $this->db->JOIN('suteikia', 'darbo_grafikas.tabel_nr_id=suteikia.tabel_nr_id');
            $this->db->WHERE('pas_id', $paslauga);
            $this->db->WHERE('darb_dat_nuo <=', $data);
            $this->db->WHERE('darbo_data_iki >=', $data);
            $this->db->ORDER_BY('darb_dat_nuo');
            $query=$this->db->get();
            return $query->result();
        }
            // išskirsto grafiko valandas pagal paslaugos trukmę
        public function darboGrafikas($darbo_grafikas, $uzimta, $paslauga, $data)
        {
            $uzimti_laikai = [];
            foreach ($uzimta as $laikas) {
                list($hours, $mins, $secs) = explode(':', $laikas->atlik_laikas);
                $uzimti_laikai[] = ($hours * 3600 ) + ($mins * 60 ) + $secs;
            }

            list($hours, $mins, $secs) = explode(':', $paslauga->trukme);
            $trukme = ($hours * 3600 ) + ($mins * 60 ) + $secs;

            list($hours, $mins, $secs) = explode(':', $darbo_grafikas->laikas_nuo);
            $pradzia = ($hours * 3600 ) + ($mins * 60 ) + $secs;

            list($hours, $mins, $secs) = explode(':', $darbo_grafikas->laikas_iki);
            $pabaiga = ($hours * 3600 ) + ($mins * 60 ) + $secs;

            $pietu_pradzia = 12 * 60 * 60;
            $pietu_pabaiga = $pietu_pradzia + 60 * 60;

            $valandos = [];
            for ($valanda=$pradzia; $valanda<$pabaiga; $valanda+=$trukme) {
                $uzimta = false;
                foreach ($uzimti_laikai as $uzimtas_laikas) {
                    if ($valanda == $uzimtas_laikas) {
                        $uzimta = true;
                        break;
                    }
                }

                if ($valanda >= $pietu_pradzia && $valanda < $pietu_pabaiga) {
                    continue;
                }

                $v = floor($valanda/60);
                $valandos[] = [
                    'laikas' => sprintf('%02.0f:%02.0f', floor($v/60), ($v%60)),
                    'uzimta' => $uzimta,
                    'tabelis' => $darbo_grafikas->tabel_nr_id,
                ];
            }
            return $valandos;
        }
		
		public function datos_paslaugai($paslauga, $darbuotojas)
        {
            $this->db->SELECT('darb_dat_nuo, darbo_data_iki, laikas_nuo, laikas_iki, suteikia.tabel_nr_id'); 
            $this->db->FROM('darbo_grafikas');
            $this->db->JOIN('suteikia', 'darbo_grafikas.tabel_nr_id=suteikia.tabel_nr_id');
            $this->db->WHERE('pas_id', $paslauga);
            //$this->db->WHERE('darb_dat_nuo <=', date("Y-m-d"));
            $this->db->WHERE('darbo_data_iki >=', date("Y-m-d"));
			if($darbuotojas>0){
			$this->db->WHERE('darbo_grafikas.tabel_nr_id', $darbuotojas);
			}
            $this->db->ORDER_BY('darb_dat_nuo');
            $query=$this->db->get();
            return $query->result();
        }
		//išskirsto darbo dienos valandas
		public function intervalai_i_dienu_masyva($paslauga, $darbuotojas, $grafikai, $limitas=45){
			$dienos = [];
			foreach($grafikai as $grafikas){
				$dabartine_diena = $grafikas->darb_dat_nuo;
				while($dabartine_diena!=$grafikas->darbo_data_iki){
                    $dienos[$dabartine_diena]=1;
					$dabartine_diena = date('Y-m-d', strtotime($dabartine_diena. ' + 1 days'));
				}
                $dienos[$dabartine_diena]=1;
			}
			$grazinimui = [];
			$siandien = date("Y-m-d");
			end($dienos);
			$paskutine_diena = key($dienos);
			$kiek = 0;	
			$dabartinis_menuo = date("m");
			$datos_menuo = $dabartinis_menuo;
			$indeksas = $datos_menuo;
			$diena = date("d");
			while($kiek<$limitas){
				if($datos_menuo!=$dabartinis_menuo){
					$indeksas++;
					$dabartinis_menuo = $datos_menuo;
				}
				if(isset($dienos[$siandien])){
					$grazinimui[$indeksas][$diena*1] = base_url()."/index.php/klientas/ajax_gauti_laikus_dienai/".$paslauga."/".$darbuotojas."/".$siandien;
				}
				$kita_data = strtotime($siandien. ' + 1 days');
				$siandien = date('Y-m-d', $kita_data);
				$datos_menuo = date('m', $kita_data);
				$diena = date('d', $kita_data);
				$kiek++;
			}
			return $grazinimui;
		}
		
		public function paslaugos_tiekejai($paslauga)
        {
            $this->db->SELECT('darbuotojas.tabel_nr_id, vard, pav'); 
            $this->db->FROM('darbuotojas');
            $this->db->JOIN('suteikia', 'darbuotojas.tabel_nr_id=suteikia.tabel_nr_id');
            $this->db->WHERE('suteikia.pas_id', $paslauga);
            $this->db->ORDER_BY('vard, pav');
            $query=$this->db->get();
            return $query->result();
        }

    public function atnaujintigrafika($dg_id)
        {
            $this->db->where('dg_id', $dg_id);
            $this->db->update('darbo_grafikas',$this);
        }
}

?>