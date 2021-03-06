<?php

/**
 * ExcursionLugarInteres
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ExcursionLugarInteres extends BaseExcursionLugarInteres
{
    
    public function __toString() {
        return $this->getNombre();
    }

    public function getExcursionLugarIntereses() {
        $q = Doctrine_Query::create()
                ->from('ExcursionLugarInteres c');
        $q->orderBy('c.nombre ASC');
        return $q->execute();
    }

    static public $status = array(
        0 => 'Inactivo',
        1 => 'Activo',
    );

    public function getExcursionLugarInteresSelectFront() {
        $q = Doctrine_Query::create()
                ->from('ExcursionLugarInteres c')
                ->orderBy('c.nombre ASC');
        return $q;
    }

    public function postSave($values) {

        $excursion_lugar_intereses = new ExcursionLugarInteres();
        $excursion_lugar_intereses = $excursion_lugar_intereses->getExcursionLugarIntereses();
        foreach ($excursion_lugar_intereses as $excursion_lugar_interes) {
            sfContext::getInstance()->getUser()->setAttribute('excursiones_lugar_intereses' . $excursion_lugar_interes->getId(), $excursion_lugar_interes->getNombre());
        }
    }

}
