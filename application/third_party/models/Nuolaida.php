<?php
class Nuolaida extends CI_Model {


        
        public $nuol_id;
        public $nuol_pav;
        public $suma;
        public $rusis;
        public $nuol_data_nuo;
        public $nuol_data_iki;



        public function gautinuolaidosinfo($nuol_id)
        {
                
                $query = $this->db->query("select * from nuolaida where nuol_pav='".$nuol_id."'");
                return $query->result();
        }


        public function gautinuolaidossuma($nuol_id)
        {
                
                $query = $this->db->query("select suma from nuolaida where nuol_id=".$nuol_id);
                return $query->result();
        }

}

?>