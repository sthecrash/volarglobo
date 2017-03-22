<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoTarifaPrecio', 'doctrine');

/**
 * BaseTipoTarifaPrecio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $tipo_tarifa_id
 * @property integer $rango_edad_id
 * @property float $precio
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property TipoTarifa $TipoTarifa
 * @property RangoEdad $RangoEdad
 * 
 * @method integer          getId()             Returns the current record's "id" value
 * @method integer          getEmpresaId()      Returns the current record's "empresa_id" value
 * @method integer          getTipoTarifaId()   Returns the current record's "tipo_tarifa_id" value
 * @method integer          getRangoEdadId()    Returns the current record's "rango_edad_id" value
 * @method float            getPrecio()         Returns the current record's "precio" value
 * @method integer          getUserId()         Returns the current record's "user_id" value
 * @method string           getUserName()       Returns the current record's "user_name" value
 * @method Empresa          getEmpresa()        Returns the current record's "Empresa" value
 * @method TipoTarifa       getTipoTarifa()     Returns the current record's "TipoTarifa" value
 * @method RangoEdad        getRangoEdad()      Returns the current record's "RangoEdad" value
 * @method TipoTarifaPrecio setId()             Sets the current record's "id" value
 * @method TipoTarifaPrecio setEmpresaId()      Sets the current record's "empresa_id" value
 * @method TipoTarifaPrecio setTipoTarifaId()   Sets the current record's "tipo_tarifa_id" value
 * @method TipoTarifaPrecio setRangoEdadId()    Sets the current record's "rango_edad_id" value
 * @method TipoTarifaPrecio setPrecio()         Sets the current record's "precio" value
 * @method TipoTarifaPrecio setUserId()         Sets the current record's "user_id" value
 * @method TipoTarifaPrecio setUserName()       Sets the current record's "user_name" value
 * @method TipoTarifaPrecio setEmpresa()        Sets the current record's "Empresa" value
 * @method TipoTarifaPrecio setTipoTarifa()     Sets the current record's "TipoTarifa" value
 * @method TipoTarifaPrecio setRangoEdad()      Sets the current record's "RangoEdad" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoTarifaPrecio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_tarifa_precio');
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
             'autoincrement' => false,
             'default' => 1,
             ));
        $this->hasColumn('tipo_tarifa_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('rango_edad_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('precio', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             'scale' => '2',
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

        $this->hasOne('TipoTarifa', array(
             'local' => 'tipo_tarifa_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('RangoEdad', array(
             'local' => 'rango_edad_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}