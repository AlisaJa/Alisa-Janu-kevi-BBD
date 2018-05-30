<?php
class Registracija extends CI_Model {

        public $reg_id;
        public $nuol_id;
        public $pas_id;
        public $tabel_nr_id;
        public $pateik_data;
        public $atlik_data;
        public $busena;
        public $kl_vard;
        public $kl_pav;
        public $kl_tel_nr;
        public $el_past;
        public $pastab;
        public $uzsk_suma;


        

        public function iterptinaujaregistracija()
        {

                    $this->db->insert('registracija', $this);

                    return $this->db->insert_id();      
        }
        

        public function gautimanoregistracija($tabel_nr_id)
        {       
                $this->db->select('*');
                $this->db->from('registracija');
                $this->db->join('darbuotojas', 'registracija.tabel_nr_id=darbuotojas.tabel_nr_id');
                $this->db->order_by('atlik_data', 'asc');
                
                if(
                    $tabel_nr_id<='2'){$query = $this->db->get(); 
                    return $query->result();}

                    else{ 

                        $this->db->where('registracija.tabel_nr_id', $tabel_nr_id); 
                        $query = $this->db->get(); 
                        return $query->result();}
                
        }
        //1 klientas atsauke
        //2 darbuotojas atsauke
        //3 atvyko
        //0 uzsiregistravo

         public function klientoatsaukimas($reg_id, $busena=1)
        {

                $this->db->update('registracija', array('busena'=>$busena), array('reg_id' => $reg_id));
        }

        public function atnaujintiregistracija($reg_id)
        {
            $this->db->where('reg_id', $reg_id);
            $this->db->update('registracija',$this);
        }

        public function istrintiregistracija($reg_id)
        {
            $this->db->where('reg_id', $reg_id);
            $this->db->delete('registracija');
        }

        public function uzimtilaikai($paslauga, $data)
        {
            $this->db->select('time(atlik_data) as atlik_laikas'); 
            $this->db->from('registracija');
            $this->db->where('pas_id', $paslauga);
            $this->db->where('date(atlik_data)', $data);
            return $this->db->get()->result();
        }


        public function gautiregistracija($reg_id)
        {       
                $query = $this->db->query("select * from registracija where reg_id=".$reg_id);
                return $query->result();
    
        }


        public function gautiregistracijoslaika($reg_id)
        {       
                $query = $this->db->query("select atlik_data from registracija where reg_id=".$reg_id);
                return $query->result();
    
        }


}

?>