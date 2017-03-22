<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoRestriciones', 'doctrine');

/**
 * BaseTipoRestriciones
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property string $nombre
 * @property string $descripcion
 * @property string $orden
 * @property string $imagen
 * @property integer $status
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property Doctrine_Collection $VueloRestriciones
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method integer             getEmpresaId()         Returns the current record's "empresa_id" value
 * @method string              getNombre()            Returns the current record's "nombre" value
 * @method string              getDescripcion()       Returns the current record's "descripcion" value
 * @method string              getOrden()             Returns the current record's "orden" value
 * @method string              getImagen()            Returns the current record's "imagen" value
 * @method integer             getStatus()            Returns the current record's "status" value
 * @method integer             getUserId()            Returns the current record's "user_id" value
 * @method string              getUserName()          Returns the current record's "user_name" value
 * @method Empresa             getEmpresa()           Returns the current record's "Empresa" value
 * @method Doctrine_Collection getVueloRestriciones() Returns the current record's "VueloRestriciones" collection
 * @method TipoRestriciones    setId()                Sets the current record's "id" value
 * @method TipoRestriciones    setEmpresaId()         Sets the current record's "empresa_id" value
 * @method TipoRestriciones    setNombre()            Sets the current record's "nombre" value
 * @method TipoRestriciones    setDescripcion()       Sets the current record's "descripcion" value
 * @method TipoRestriciones    setOrden()             Sets the current record's "orden" value
 * @method TipoRestriciones    setImagen()            Sets the current record's "imagen" value
 * @method TipoRestriciones    setStatus()            Sets the current record's "status" value
 * @method TipoRestriciones    setUserId()            Sets the current record's "user_id" value
 * @method TipoRestriciones    setUserName()          Sets the current record's "user_name" value
 * @method TipoRestriciones    setEmpresa()           Sets the current record's "Empresa" value
 * @method TipoRestriciones    setVueloRestriciones() Sets the current record's "VueloRestriciones" collection
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTipoRestriciones extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_restriciones');
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
        $this->hasColumn('orden', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('imagen', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
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

        $this->hasMany('VueloRestriciones', array(
             'local' => 'id',
             'foreign' => 'tipo_restriciones_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}