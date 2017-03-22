<?php

/**
 * Campo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Campo extends BaseCampo
{
    
    
     public function __toString() {
        return $this->getNombre();
    }
    
    
          
    public function getCampos(){
        $q = Doctrine_Query::create()
            -> from('Campo c')
            ->orderBy('c.nombre ASC');
       return $q->execute();
    }
    
     public function getCamposSelect(){
        $q = Doctrine_Query::create()
            -> from('Campo c')
            ->where('c.status = 1')
            ->orderBy('c.nombre ASC');
       return $q;
    }
    
    
     public function postSave($values){
   
         $campo = new Campo();
           $campos = $campo->getCamposSelect()->execute();
           foreach ($campos as $red){
               sfContext::getInstance()->getUser()->setAttribute('red'.$red->getId(),$red->getNombre());
           }
         
         
    }   
    
    
}