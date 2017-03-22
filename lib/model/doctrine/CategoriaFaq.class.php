<?php

/**
 * CategoriaFaq
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class CategoriaFaq extends BaseCategoriaFaq
{
    
    public function __toString() {
        return $this->getNombre();
    }
    
        public function getCategoriaFaqs(){
        $q = Doctrine_Query::create()
            -> from('CategoriaFaq c')
            ->where('c.status = ?', '1')
            ->orderBy('orden ASC');
       return $q->execute();
    }
    
    
    public function getCategoriaFaqsSelect(){
        $q = Doctrine_Query::create()
            -> from('CategoriaFaq c')
            ->where('c.status >0');
       return $q;
    }
    
    
}
