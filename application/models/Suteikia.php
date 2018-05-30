<?php
class Suteikia extends CI_Model {


        public $tabel_nr_id;
        public $pas_id;

        public function suteikiapaslaugas($pas_id)
        {
                
                $this->db->select('vard, pav');
                $this->db->from('darbuotojas');
                $this->db->join('suteikia', 'suteikia.tabel_nr_id=darbuotojas.tabel_nr_id' );
                $this->db->where('darbuotojas.tabel_nr_id', $tabel_nr_id);
                $query=$this->db->get();
                return $query->result();
        }



}

?>