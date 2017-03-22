<?php

/**
 * Globo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Globo extends BaseGlobo
{
    
     public function __toString() {
        return $this->getNombre();
    }

    static public $status = array(
        0 => 'Inactivo',
        1 => 'Activo'

    );


     public function getGlobos(){
        $q = Doctrine_Query::create()
            ->from('Globo p')
            ->orderBy('p.orden ASC');
       return $q->execute();
    }
    
    
        public function getGlobosSelect(){
       $q = Doctrine_Query::create()
            
            -> from('Globo p')
            ->orderBy('p.nombre');
       return $q;
    }
}
