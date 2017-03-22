<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VueloServicio', 'doctrine');

/**
 * BaseVueloServicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $proveedor_vuelo_id
 * @property integer $proveedor_descuento_id
 * @property string $cantidad
 * @property string $valor
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property ProveedorVuelo $ProveedorVuelo
 * @property ProveedorDescuento $ProveedorDescuento
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer            getId()                     Returns the current record's "id" value
 * @method integer            getEmpresaId()              Returns the current record's "empresa_id" value
 * @method integer            getProveedorVueloId()       Returns the current record's "proveedor_vuelo_id" value
 * @method integer            getProveedorDescuentoId()   Returns the current record's "proveedor_descuento_id" value
 * @method string             getCantidad()               Returns the current record's "cantidad" value
 * @method string             getValor()                  Returns the current record's "valor" value
 * @method integer            getUserId()                 Returns the current record's "user_id" value
 * @method string             getUserName()               Returns the current record's "user_name" value
 * @method Empresa            getEmpresa()                Returns the current record's "Empresa" value
 * @method ProveedorVuelo     getProveedorVuelo()         Returns the current record's "ProveedorVuelo" value
 * @method ProveedorDescuento getProveedorDescuento()     Returns the current record's "ProveedorDescuento" value
 * @method sfGuardUser        getSfGuardUser()            Returns the current record's "sfGuardUser" value
 * @method VueloServicio      setId()                     Sets the current record's "id" value
 * @method VueloServicio      setEmpresaId()              Sets the current record's "empresa_id" value
 * @method VueloServicio      setProveedorVueloId()       Sets the current record's "proveedor_vuelo_id" value
 * @method VueloServicio      setProveedorDescuentoId()   Sets the current record's "proveedor_descuento_id" value
 * @method VueloServicio      setCantidad()               Sets the current record's "cantidad" value
 * @method VueloServicio      setValor()                  Sets the current record's "valor" value
 * @method VueloServicio      setUserId()                 Sets the current record's "user_id" value
 * @method VueloServicio      setUserName()               Sets the current record's "user_name" value
 * @method VueloServicio      setEmpresa()                Sets the current record's "Empresa" value
 * @method VueloServicio      setProveedorVuelo()         Sets the current record's "ProveedorVuelo" value
 * @method VueloServicio      setProveedorDescuento()     Sets the current record's "ProveedorDescuento" value
 * @method VueloServicio      setSfGuardUser()            Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVueloServicio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vuelo_servicio');
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
        $this->hasColumn('proveedor_vuelo_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('proveedor_descuento_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('cantidad', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'default' => 1,
             'length' => '',
             ));
        $this->hasColumn('valor', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'default' => 1,
             'length' => '',
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

        $this->hasOne('ProveedorVuelo', array(
             'local' => 'proveedor_vuelo_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('ProveedorDescuento', array(
             'local' => 'proveedor_descuento_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}