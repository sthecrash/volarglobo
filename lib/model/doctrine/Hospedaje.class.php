<?php

/**
 * Hospedaje
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Hospedaje extends BaseHospedaje
{
    public function __toString() {
        return $this->getNombre();
    }
    


    
    public function  setFeriados($data) {
                $data = serialize($data);
                $this->_set('feriados', $data);
   }
      
      
      
     public function  getFeriados(){
             return unserialize($this->_get('feriados'));
            
      }
                
     public function getEmpresaCtteId($CtteId){
        $q = Doctrine_Query::create()
                ->from('Hospedaje c')
                ->where('c.user_id=?', $CtteId);
        return $q->execute();
    }
    
    public function getCtteId($CtteId){
        $q = Doctrine_Query::create()
                ->from('Hospedaje c')
                ->where('c.id=?', $CtteId);
        return $q->fetchOne();
    }
    
    public function getCtteSlug($CtteId){
        $q = Doctrine_Query::create()
                ->from('Hospedaje c')
                ->where('c.slug=?', $CtteId);
        return $q->fetchOne();
    }
      
      
       public function getHospedajes(){
        $q = Doctrine_Query::create()
                ->from('Hospedaje c')
//                ->where('c.empresa_id=?', sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
                ->orderBy('c.nickname asc');
        return $q->execute();
    }
    
    public function getHospedajesUltimas(){
        $q = Doctrine_Query::create()
                ->from('Hospedaje c')
//                ->where('c.empresa_id=?', sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
                ->orderBy('c.id desc');
        return $q->execute();
    }
    
    
    
    
     public function getHospedajesPager(){
       $q = Doctrine_Query::create()
            -> from('Hospedaje p')
//            ->where('p.empresa_id=?', sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
            ->orderBy('p.nombre');
       return $q;
    }
    
       public function getHospedajeId($id){
       $q = Doctrine_Query::create()
            -> from('Hospedaje p')
            ->where('p.id=?', $id)
            ->orderBy('p.nombre');
       return $q->fetchOne();
    }
    
    
    public function getHospedajesSelect(){
       $q = Doctrine_Query::create()
            ->select("p.id, CONCAT(p.nombre,' RUC',p.rif) as nombre")
            -> from('Hospedaje p')
//             ->where('p.empresa_id=?', sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
            ->orderBy('p.nombre');
       return $q;
    }
    
    public function getHospedajeMarca(){
        $q = Doctrine_Query::create()
                ->from('Hospedaje c')
//                ->where('c.empresa_id=?', sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
                ->orderBy('c.nickname asc');
        return $q;
    }
      
    
    public function getHospedajesTotal(){
       $q = Doctrine_Query::create()
            ->select(' COUNT(c.id) as cant')
            -> from('Hospedaje c')
//            ->where('c.empresa_id = ?',sfContext::getInstance()->getUser()->getAttribute('agente_user_empresa_id'))
            ->groupBy('c.empresa_id');
       return $q->execute();
    }
    
      
}
