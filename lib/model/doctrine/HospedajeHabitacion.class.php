<?php

/**
 * HospedajeHabitacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class HospedajeHabitacion extends BaseHospedajeHabitacion
{
    
//        public function  setTipoCama($data) {
//                   $data = serialize($data);
//                   $this->_set('tipo_cama', $data);
//      }
//      
//     public function  getTipoCama(){
//             return unserialize($this->_get('tipo_cama'));
//            
//      }
         
      
    public function __toString() {
        return $this->getNombre();
    }
    

      
      
}
