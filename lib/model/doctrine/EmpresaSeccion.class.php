<?php

/**
 * EmpresaSeccion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class EmpresaSeccion extends BaseEmpresaSeccion
{
    
    public function __toString() {
        return $this->getTitulo();
    }
    
    
    public function getEmpresaSecciones(){
        $q = Doctrine_Query::create()
            -> from('EmpresaSeccion c')
            ->where('c.empresa_id = ?', '1')
            ->orderBy('c.titulo ASC');
       return $q->execute();
    }
    
    
    
}
