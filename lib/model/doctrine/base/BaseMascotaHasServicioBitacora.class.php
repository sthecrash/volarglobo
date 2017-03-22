<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MascotaHasServicioBitacora', 'doctrine');

/**
 * BaseMascotaHasServicioBitacora
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $servicio_id
 * @property integer $mascota_id
 * @property ServicioBitacora $ServicioBitacora
 * @property Mascota $Mascota
 * 
 * @method integer                    getServicioId()       Returns the current record's "servicio_id" value
 * @method integer                    getMascotaId()        Returns the current record's "mascota_id" value
 * @method ServicioBitacora           getServicioBitacora() Returns the current record's "ServicioBitacora" value
 * @method Mascota                    getMascota()          Returns the current record's "Mascota" value
 * @method MascotaHasServicioBitacora setServicioId()       Sets the current record's "servicio_id" value
 * @method MascotaHasServicioBitacora setMascotaId()        Sets the current record's "mascota_id" value
 * @method MascotaHasServicioBitacora setServicioBitacora() Sets the current record's "ServicioBitacora" value
 * @method MascotaHasServicioBitacora setMascota()          Sets the current record's "Mascota" value
 * 
 * @package    cronos-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMascotaHasServicioBitacora extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mascota_has_servicio_bitacora');
        $this->hasColumn('servicio_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('mascota_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ServicioBitacora', array(
             'local' => 'servicio_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('Mascota', array(
             'local' => 'mascota_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}