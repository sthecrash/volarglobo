<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VehiculoTipoTransmision', 'doctrine');

/**
 * BaseVehiculoTipoTransmision
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $status
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $Vehiculo
 * 
 * @method integer                 getId()          Returns the current record's "id" value
 * @method integer                 getEmpresaId()   Returns the current record's "empresa_id" value
 * @method string                  getNombre()      Returns the current record's "nombre" value
 * @method string                  getDescripcion() Returns the current record's "descripcion" value
 * @method integer                 getStatus()      Returns the current record's "status" value
 * @method integer                 getUserId()      Returns the current record's "user_id" value
 * @method string                  getUserName()    Returns the current record's "user_name" value
 * @method Empresa                 getEmpresa()     Returns the current record's "Empresa" value
 * @method sfGuardUser             getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection     getVehiculo()    Returns the current record's "Vehiculo" collection
 * @method VehiculoTipoTransmision setId()          Sets the current record's "id" value
 * @method VehiculoTipoTransmision setEmpresaId()   Sets the current record's "empresa_id" value
 * @method VehiculoTipoTransmision setNombre()      Sets the current record's "nombre" value
 * @method VehiculoTipoTransmision setDescripcion() Sets the current record's "descripcion" value
 * @method VehiculoTipoTransmision setStatus()      Sets the current record's "status" value
 * @method VehiculoTipoTransmision setUserId()      Sets the current record's "user_id" value
 * @method VehiculoTipoTransmision setUserName()    Sets the current record's "user_name" value
 * @method VehiculoTipoTransmision setEmpresa()     Sets the current record's "Empresa" value
 * @method VehiculoTipoTransmision setSfGuardUser() Sets the current record's "sfGuardUser" value
 * @method VehiculoTipoTransmision setVehiculo()    Sets the current record's "Vehiculo" collection
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVehiculoTipoTransmision extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vehiculo_tipo_transmision');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'default' => 1,
             'autoincrement' => false,
             ));
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 1,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'default' => 1,
             ));
        $this->hasColumn('user_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'autoincrement' => false,
             'notnull' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('Vehiculo', array(
             'local' => 'id',
             'foreign' => 'vehiculo_tipo_transmision_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}