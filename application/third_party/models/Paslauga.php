<?php
class Paslauga extends CI_Model {

        public $pas_id;
        public $pasl_pav;
        public $trukme;
        public $kaina;
        public $apras;
        public $kat_id;

        public function gautivisaspaslaugas()
        {
                $query = $this->db->get('paslauga'); // iš kurios lentelės pasiima duomenis
                return $query->result();
        }
         public function gautipaslaugosinfo($pas_id=1)
        {
                $this->db->where('pas_id', $pas_id);
                $query = $this->db->get('paslauga'); // iš kurios lentelės pasiima duomenis
                return $query->result();
        }

        public function gautipaslaugaspagalkategorija($kat_id=2) // rodys paslaugas iš 2 kategorijos
        {       
                $this->db->where('kat_id', $kat_id);// parašom where parametrą pagal kurį ieškom
                $query = $this->db->get('paslauga'); //iš kurios lentelės
                
                return $query->result();
        }

        public function gautikategorijapagaljosid ($kat_id=2) // rodys paslaugas iš 1 kategorijos
        {       
                $this->db->where('kat_id', $kat_id);// parašom where parametrą pagal kurį ieškom
                $query = $this->db->get('paslaug_kat'); //iš kurios lentelės
                
                return $query->result();
        }


        public function update_entry()
        {
                $this->title    = $_post['title'];
                $this->content  = $_post['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_post['id']));
        }

        
        public function gautiatliekamaspaslaugas($tabel_nr_id)
        {
                
                $this->db->select('darbuotojas.vard, darbuotojas.pav, pasl_pav, trukme, kaina');
                $this->db->from('paslauga');
                $this->db->join('suteikia', 'suteikia.pas_id=paslauga.pas_id' );
                $this->db->join('darbuotojas', 'suteikia.tabel_nr_id=darbuotojas.tabel_nr_id' );
                $this->db->where('darbuotojas.tabel_nr_id', $tabel_nr_id);
                $query=$this->db->get();
                return $query->result();
        }



         public function gautipaslaugoskaina($pas_id)
        {
                
                $query = $this->db->query("select kaina from paslauga where pas_id=".$pas_id);
                return $query->result();
        }


}

?>