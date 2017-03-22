<?php

/**
 * Quemador
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Quemador extends BaseQuemador
{
    
     
     public function __toString() {
        return $this->getNumeroSerie();
    }
    
    
          
    public function getQuemadores(){
        $q = Doctrine_Query::create()
            -> from('Quemador c')
            ->orderBy('c.id ASC');
       return $q->execute();
    }
    
     public function getQuemadorSelect(){
        $q = Doctrine_Query::create()
            -> from('Quemador c')
            ->orderBy('c.id ASC');
       return $q;
    }
    
    
}
