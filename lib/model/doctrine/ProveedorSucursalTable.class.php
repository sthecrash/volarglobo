<?php

/**
 * ProveedorSucursalTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProveedorSucursalTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProveedorSucursalTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ProveedorSucursal');
    }
    
        
     public function getNombre(){
        $q = Doctrine_Query::create()
                ->from('ProveedorSucursal e')
                ->orderBy('e.nombre asc');
        return $q->execute();
    }
}