<?php
class Nuolaida extends CI_Model {


        
        public $nuol_id;
        public $nuol_pav;
        public $suma;
        public $rusis;
        public $nuol_data_nuo;
        public $nuol_data_iki;



        public function gautinuolaidosinfo($nuol_pav)
        {
                
                $query = $this->db->query("select * from nuolaida where nuol_pav='".$nuol_pav."' AND nuol_data_nuo<=NOW() AND nuol_data_iki>=NOW()");
                return $query->result();
        }


        public function gautinuolaidossuma($nuol_id)
        {
                
                $query = $this->db->query("select suma from nuolaida where nuol_id=".$nuol_id);
                return $query->result();
        }

        public function iterptinaujanuolaida()
        {

                    $this->db->insert('nuolaida', $this);

                    return $this->db->insert_id();      
        }


        public function gautinuolaidas()
        {
                
                $this->db->SELECT('nuol_id, nuol_pav, suma, rusis, nuol_data_nuo, nuol_data_iki');
                $this->db->FROM('nuolaida');

                    if(isset($_POST['nuol_data_iki']) && trim($_POST['nuol_data_iki'])!=""){

               $this->db->WHERE('nuol_data_nuo <=', $_POST['nuol_data_iki']);
            }
                    if(isset($_POST['nuol_data_nuo']) && trim($_POST['nuol_data_nuo'])!=""){

                $this->db->WHERE('nuol_data_iki >=', $_POST['nuol_data_nuo']);
            }
                    if(isset($_POST['suma']) && $_POST['suma']>0){
                $this->db->WHERE('suma', $_POST['suma']);
            }

                $this->db->ORDER_BY('nuol_data_nuo, nuol_data_iki');
                $query=$this->db->get();
                return $query->result();
        }

        public function gautinuolaida($nuol_id){
                $query = $this->db->query("select * from nuolaida where nuol_id=".$nuol_id);
                return $query->result();
        }


        public function atnaujintinuolaida($nuol_id)
        {
            $this->db->where('nuol_id', $nuol_id);
            $this->db->update('nuolaida',$this);
        }

}

?>