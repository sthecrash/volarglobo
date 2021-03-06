<?php

/**
 * Marca
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Marca extends BaseMarca
{
        public function __toString() {
        return $this->getNombre();
    }
    
        public function getMarcas(){
        $q = Doctrine_Query::create()
            -> from('Marca c')
            ->where('c.status = ?', '1');
       return $q->execute();
    }
    
    
    public function getMarcaSelect(){
        $q = Doctrine_Query::create()
            -> from('Marca c')
            ->where('c.status >0');
       return $q;
    }
    
    
    
}
