<?php

/**
 * VehiculoCategoria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class VehiculoCategoria extends BaseVehiculoCategoria
{
    
    public function __toString() {
        return $this->getNombre();
    }
    
    public function getVehiculoCategorias(){
        $q = Doctrine_Query::create()
            -> from('VehiculoCategoria c');
            $q->orderBy('c.nombre ASC');
       return $q->execute();
    }
    
     static public $status = array(
        0 => 'Inactivo',
        1 => 'Activo',
    );
    
    public function getVehiculoCategoriaSelectFront(){
        $q = Doctrine_Query::create()
            -> from('VehiculoCategoria c')
            ->orderBy('c.nombre ASC');
       return $q;
    }
}
