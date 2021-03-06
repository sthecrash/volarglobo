<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Excursion', 'doctrine');

/**
 * BaseExcursion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $provincia_id
 * @property integer $ciudad_id
 * @property integer $ubicacion_id
 * @property string $nombre
 * @property string $imagen
 * @property string $descripcion
 * @property string $fecha
 * @property string $tipo_publico
 * @property integer $capacidad_persona
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $ExcursionHasAdicional
 * @property Doctrine_Collection $ExcursionHasPolitica
 * @property Doctrine_Collection $ExcursionHasLugarInteres
 * @property Doctrine_Collection $ExcursionHasInclusion
 * @property Doctrine_Collection $ExcursionHasRequisito
 * @property Doctrine_Collection $ExcursionPrecio
 * 
 * @method integer             getId()                       Returns the current record's "id" value
 * @method integer             getEmpresaId()                Returns the current record's "empresa_id" value
 * @method integer             getProvinciaId()              Returns the current record's "provincia_id" value
 * @method integer             getCiudadId()                 Returns the current record's "ciudad_id" value
 * @method integer             getUbicacionId()              Returns the current record's "ubicacion_id" value
 * @method string              getNombre()                   Returns the current record's "nombre" value
 * @method string              getImagen()                   Returns the current record's "imagen" value
 * @method string              getDescripcion()              Returns the current record's "descripcion" value
 * @method string              getFecha()                    Returns the current record's "fecha" value
 * @method string              getTipoPublico()              Returns the current record's "tipo_publico" value
 * @method integer             getCapacidadPersona()         Returns the current record's "capacidad_persona" value
 * @method integer             getUserId()                   Returns the current record's "user_id" value
 * @method string              getUserName()                 Returns the current record's "user_name" value
 * @method Empresa             getEmpresa()                  Returns the current record's "Empresa" value
 * @method sfGuardUser         getSfGuardUser()              Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getExcursionHasAdicional()    Returns the current record's "ExcursionHasAdicional" collection
 * @method Doctrine_Collection getExcursionHasPolitica()     Returns the current record's "ExcursionHasPolitica" collection
 * @method Doctrine_Collection getExcursionHasLugarInteres() Returns the current record's "ExcursionHasLugarInteres" collection
 * @method Doctrine_Collection getExcursionHasInclusion()    Returns the current record's "ExcursionHasInclusion" collection
 * @method Doctrine_Collection getExcursionHasRequisito()    Returns the current record's "ExcursionHasRequisito" collection
 * @method Doctrine_Collection getExcursionPrecio()          Returns the current record's "ExcursionPrecio" collection
 * @method Excursion           setId()                       Sets the current record's "id" value
 * @method Excursion           setEmpresaId()                Sets the current record's "empresa_id" value
 * @method Excursion           setProvinciaId()              Sets the current record's "provincia_id" value
 * @method Excursion           setCiudadId()                 Sets the current record's "ciudad_id" value
 * @method Excursion           setUbicacionId()              Sets the current record's "ubicacion_id" value
 * @method Excursion           setNombre()                   Sets the current record's "nombre" value
 * @method Excursion           setImagen()                   Sets the current record's "imagen" value
 * @method Excursion           setDescripcion()              Sets the current record's "descripcion" value
 * @method Excursion           setFecha()                    Sets the current record's "fecha" value
 * @method Excursion           setTipoPublico()              Sets the current record's "tipo_publico" value
 * @method Excursion           setCapacidadPersona()         Sets the current record's "capacidad_persona" value
 * @method Excursion           setUserId()                   Sets the current record's "user_id" value
 * @method Excursion           setUserName()                 Sets the current record's "user_name" value
 * @method Excursion           setEmpresa()                  Sets the current record's "Empresa" value
 * @method Excursion           setSfGuardUser()              Sets the current record's "sfGuardUser" value
 * @method Excursion           setExcursionHasAdicional()    Sets the current record's "ExcursionHasAdicional" collection
 * @method Excursion           setExcursionHasPolitica()     Sets the current record's "ExcursionHasPolitica" collection
 * @method Excursion           setExcursionHasLugarInteres() Sets the current record's "ExcursionHasLugarInteres" collection
 * @method Excursion           setExcursionHasInclusion()    Sets the current record's "ExcursionHasInclusion" collection
 * @method Excursion           setExcursionHasRequisito()    Sets the current record's "ExcursionHasRequisito" collection
 * @method Excursion           setExcursionPrecio()          Sets the current record's "ExcursionPrecio" collection
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExcursion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('excursion');
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
        $this->hasColumn('provincia_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('ciudad_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('ubicacion_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
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
        $this->hasColumn('imagen', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('fecha', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('tipo_publico', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('capacidad_persona', 'integer', null, array(
             'type' => 'integer',
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

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('ExcursionHasAdicional', array(
             'local' => 'id',
             'foreign' => 'excursion_id'));

        $this->hasMany('ExcursionHasPolitica', array(
             'local' => 'id',
             'foreign' => 'excursion_id'));

        $this->hasMany('ExcursionHasLugarInteres', array(
             'local' => 'id',
             'foreign' => 'excursion_id'));

        $this->hasMany('ExcursionHasInclusion', array(
             'local' => 'id',
             'foreign' => 'excursion_id'));

        $this->hasMany('ExcursionHasRequisito', array(
             'local' => 'id',
             'foreign' => 'excursion_id'));

        $this->hasMany('ExcursionPrecio', array(
             'local' => 'id',
             'foreign' => 'excursion_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}