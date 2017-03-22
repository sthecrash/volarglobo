<?php

/**
 * CiudadTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CiudadTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CiudadTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Ciudad');
    }
    
     public function getNombre(){
        $q = Doctrine_Query::create()
                ->from('Ciudad e')
                ->orderBy('e.nombre asc');
        return $q->execute();
    }
}