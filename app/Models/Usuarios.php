<?php 
    namespace APP\Models;
    use CodeIgniter\Model;

    class Usuarios extends Model {
        public function obtenerUsuarios($data){
            $Usuario = $this->db->table('t_usuarios');
            $Usuario->where($data);
   
            return $Usuario->get()->getResultArray();
     }
    }

