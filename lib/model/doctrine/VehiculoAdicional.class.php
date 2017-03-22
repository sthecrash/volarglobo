<?php

/**
 * VehiculoAdicional
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class VehiculoAdicional extends BaseVehiculoAdicional
{
    public function __toString() {
        return $this->getNombre();
    }

    public function getVehiculoAdicionales() {
        $q = Doctrine_Query::create()
                ->from('VehiculoAdicional c');
        $q->orderBy('c.nombre ASC');
        return $q->execute();
    }
    
    static public $status = array(
        0 => 'Inactivo',
        1 => 'Activo',
    );
    
    public function getVehiculoAdicionalSelectFront(){
        $q = Doctrine_Query::create()
            -> from('VehiculoAdicional c')
            ->orderBy('c.nombre ASC');
       return $q;
    }
    
    public function postSave($values) {

        $vehiculo_adicionales = new VehiculoAdicional();
        $vehiculo_adicionales = $vehiculo_adicionales->getVehiculoAdicionales();
        foreach ($vehiculo_adicionales as $vehiculo_adicional) {
            sfContext::getInstance()->getUser()->setAttribute('vehiculos_adicionales' . $vehiculo_adicional->getId(), $vehiculo_adicional->getNombre());
        }
    }

}
