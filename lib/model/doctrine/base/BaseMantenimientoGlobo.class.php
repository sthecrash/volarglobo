<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MantenimientoGlobo', 'doctrine');

/**
 * BaseMantenimientoGlobo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $globo_id
 * @property date $fecha
 * @property string $observacion
 * @property string $realizado_por
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property Globo $Globo
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer            getId()            Returns the current record's "id" value
 * @method integer            getEmpresaId()     Returns the current record's "empresa_id" value
 * @method integer            getGloboId()       Returns the current record's "globo_id" value
 * @method date               getFecha()         Returns the current record's "fecha" value
 * @method string             getObservacion()   Returns the current record's "observacion" value
 * @method string             getRealizadoPor()  Returns the current record's "realizado_por" value
 * @method integer            getUserId()        Returns the current record's "user_id" value
 * @method string             getUserName()      Returns the current record's "user_name" value
 * @method Empresa            getEmpresa()       Returns the current record's "Empresa" value
 * @method Globo              getGlobo()         Returns the current record's "Globo" value
 * @method sfGuardUser        getSfGuardUser()   Returns the current record's "sfGuardUser" value
 * @method MantenimientoGlobo setId()            Sets the current record's "id" value
 * @method MantenimientoGlobo setEmpresaId()     Sets the current record's "empresa_id" value
 * @method MantenimientoGlobo setGloboId()       Sets the current record's "globo_id" value
 * @method MantenimientoGlobo setFecha()         Sets the current record's "fecha" value
 * @method MantenimientoGlobo setObservacion()   Sets the current record's "observacion" value
 * @method MantenimientoGlobo setRealizadoPor()  Sets the current record's "realizado_por" value
 * @method MantenimientoGlobo setUserId()        Sets the current record's "user_id" value
 * @method MantenimientoGlobo setUserName()      Sets the current record's "user_name" value
 * @method MantenimientoGlobo setEmpresa()       Sets the current record's "Empresa" value
 * @method MantenimientoGlobo setGlobo()         Sets the current record's "Globo" value
 * @method MantenimientoGlobo setSfGuardUser()   Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMantenimientoGlobo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mantenimiento_globo');
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
        $this->hasColumn('globo_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('observacion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('realizado_por', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
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

        $this->hasOne('Globo', array(
             'local' => 'globo_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}