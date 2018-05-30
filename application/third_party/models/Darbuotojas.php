<?php
class Darbuotojas extends CI_Model {


        public $tabel_nr_id;
        public $pareigos;
        public $vard;
        public $pav;
        public $tel_nr;
        public $asm_k;

        public $adr;
        public $slapt;


        
        public function prisijungti()
        {
                $this->db->where('tabel_nr_id',$this->tabel_nr_id);
                $this->db->where('slapt',$this->slapt);
                $query = $this->db->get('darbuotojas'); 
                return $query->result();
        }

        public function gautivarda($tabel_nr_id)
        {
                $query = $this->db->query("select vard from darbuotojas where tabel_nr_id=".$tabel_nr_id);
                return $query->result();
        }

        public function gautipavarde($tabel_nr_id)
        {
                $query = $this->db->query("select pav from darbuotojas where tabel_nr_id=".$tabel_nr_id);
                return $query->result();
        }

         public function gautipareigas($tabel_nr_id)
        {
                $query = $this->db->query("select pareigos from darbuotojas where tabel_nr_id=".$tabel_nr_id);
                return $query->result();
        }

        public function gautiDuomenis($tabel_nr_id)
        {
                $query = $this->db->query("select * from darbuotojas where tabel_nr_id=".$tabel_nr_id);
                return $query->result();
        }

        public function gautiatliekamaspaslaugas($tabel_nr_id)
        {
                
                $this->db->select('pasl_pav, trukme, kaina');
                $this->db->from('paslauga');
                $this->db->join('suteikia', 'suteikia.pas_id=paslauga.pas_id' );
                $this->db->join('darbuotojas', 'suteikia.tabel_nr_id=darbuotojas.tabel_nr_id' );
                $this->db->where('darbuotojas.tabel_nr_id', $tabel_nr_id);
                $query=$this->db->get();
                return $query->result();
        }

        public function atnaujintidarbuotoja($tabel_nr_id)
        {
            $this->db->where('tabel_nr_id', $tabel_nr_id);
            $this->db->update('darbuotojas',$this);
        }


        public function gautidarbduomenis()
        {
                $query = $this->db->query("select * from darbuotojas" );
                return $query->result();
        }

}

?>