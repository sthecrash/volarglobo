<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Quemador', 'doctrine');

/**
 * BaseQuemador
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $marca_id
 * @property string $modelo
 * @property string $numero_serie
 * @property string $observaciones
 * @property date $mantenimiento_proximo
 * @property date $mantenimiento_ultimo
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property Marca $Marca
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $Globo
 * @property Doctrine_Collection $MantenimientoQuemador
 * 
 * @method integer             getId()                    Returns the current record's "id" value
 * @method integer             getEmpresaId()             Returns the current record's "empresa_id" value
 * @method integer             getMarcaId()               Returns the current record's "marca_id" value
 * @method string              getModelo()                Returns the current record's "modelo" value
 * @method string              getNumeroSerie()           Returns the current record's "numero_serie" value
 * @method string              getObservaciones()         Returns the current record's "observaciones" value
 * @method date                getMantenimientoProximo()  Returns the current record's "mantenimiento_proximo" value
 * @method date                getMantenimientoUltimo()   Returns the current record's "mantenimiento_ultimo" value
 * @method integer             getUserId()                Returns the current record's "user_id" value
 * @method string              getUserName()              Returns the current record's "user_name" value
 * @method Empresa             getEmpresa()               Returns the current record's "Empresa" value
 * @method Marca               getMarca()                 Returns the current record's "Marca" value
 * @method sfGuardUser         getSfGuardUser()           Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getGlobo()                 Returns the current record's "Globo" collection
 * @method Doctrine_Collection getMantenimientoQuemador() Returns the current record's "MantenimientoQuemador" collection
 * @method Quemador            setId()                    Sets the current record's "id" value
 * @method Quemador            setEmpresaId()             Sets the current record's "empresa_id" value
 * @method Quemador            setMarcaId()               Sets the current record's "marca_id" value
 * @method Quemador            setModelo()                Sets the current record's "modelo" value
 * @method Quemador            setNumeroSerie()           Sets the current record's "numero_serie" value
 * @method Quemador            setObservaciones()         Sets the current record's "observaciones" value
 * @method Quemador            setMantenimientoProximo()  Sets the current record's "mantenimiento_proximo" value
 * @method Quemador            setMantenimientoUltimo()   Sets the current record's "mantenimiento_ultimo" value
 * @method Quemador            setUserId()                Sets the current record's "user_id" value
 * @method Quemador            setUserName()              Sets the current record's "user_name" value
 * @method Quemador            setEmpresa()               Sets the current record's "Empresa" value
 * @method Quemador            setMarca()                 Sets the current record's "Marca" value
 * @method Quemador            setSfGuardUser()           Sets the current record's "sfGuardUser" value
 * @method Quemador            setGlobo()                 Sets the current record's "Globo" collection
 * @method Quemador            setMantenimientoQuemador() Sets the current record's "MantenimientoQuemador" collection
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseQuemador extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('quemador');
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
        $this->hasColumn('marca_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('modelo', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('numero_serie', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('observaciones', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('mantenimiento_proximo', 'date', null, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('mantenimiento_ultimo', 'date', null, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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

        $this->hasOne('Marca', array(
             'local' => 'marca_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('Globo', array(
             'local' => 'id',
             'foreign' => 'quemador_id'));

        $this->hasMany('MantenimientoQuemador', array(
             'local' => 'id',
             'foreign' => 'quemador_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}