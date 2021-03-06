<?php

/**
 * TipoPersonal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class TipoPersonal extends BaseTipoPersonal
{
    
    
     public function __toString() {
        return $this->getNombre();
    }
    
    
     
    public function getTipoPersonales(){
        
         $q = Doctrine_Query::create()
            -> from('TipoPersonal p')
            ->where('p.empresa_id=?', sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
            ->addWhere('p.id>1');
            
       return $q;
        
    }
    
}
