<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Canastilla', 'doctrine');

/**
 * BaseCanastilla
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $tipo_canastilla_id
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
 * @property TipoCanastilla $TipoCanastilla
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $Globo
 * @property Doctrine_Collection $MantenimientoCanastilla
 * 
 * @method integer             getId()                      Returns the current record's "id" value
 * @method integer             getEmpresaId()               Returns the current record's "empresa_id" value
 * @method integer             getTipoCanastillaId()        Returns the current record's "tipo_canastilla_id" value
 * @method integer             getMarcaId()                 Returns the current record's "marca_id" value
 * @method string              getModelo()                  Returns the current record's "modelo" value
 * @method string              getNumeroSerie()             Returns the current record's "numero_serie" value
 * @method string              getObservaciones()           Returns the current record's "observaciones" value
 * @method date                getMantenimientoProximo()    Returns the current record's "mantenimiento_proximo" value
 * @method date                getMantenimientoUltimo()     Returns the current record's "mantenimiento_ultimo" value
 * @method integer             getUserId()                  Returns the current record's "user_id" value
 * @method string              getUserName()                Returns the current record's "user_name" value
 * @method Empresa             getEmpresa()                 Returns the current record's "Empresa" value
 * @method Marca               getMarca()                   Returns the current record's "Marca" value
 * @method TipoCanastilla      getTipoCanastilla()          Returns the current record's "TipoCanastilla" value
 * @method sfGuardUser         getSfGuardUser()             Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getGlobo()                   Returns the current record's "Globo" collection
 * @method Doctrine_Collection getMantenimientoCanastilla() Returns the current record's "MantenimientoCanastilla" collection
 * @method Canastilla          setId()                      Sets the current record's "id" value
 * @method Canastilla          setEmpresaId()               Sets the current record's "empresa_id" value
 * @method Canastilla          setTipoCanastillaId()        Sets the current record's "tipo_canastilla_id" value
 * @method Canastilla          setMarcaId()                 Sets the current record's "marca_id" value
 * @method Canastilla          setModelo()                  Sets the current record's "modelo" value
 * @method Canastilla          setNumeroSerie()             Sets the current record's "numero_serie" value
 * @method Canastilla          setObservaciones()           Sets the current record's "observaciones" value
 * @method Canastilla          setMantenimientoProximo()    Sets the current record's "mantenimiento_proximo" value
 * @method Canastilla          setMantenimientoUltimo()     Sets the current record's "mantenimiento_ultimo" value
 * @method Canastilla          setUserId()                  Sets the current record's "user_id" value
 * @method Canastilla          setUserName()                Sets the current record's "user_name" value
 * @method Canastilla          setEmpresa()                 Sets the current record's "Empresa" value
 * @method Canastilla          setMarca()                   Sets the current record's "Marca" value
 * @method Canastilla          setTipoCanastilla()          Sets the current record's "TipoCanastilla" value
 * @method Canastilla          setSfGuardUser()             Sets the current record's "sfGuardUser" value
 * @method Canastilla          setGlobo()                   Sets the current record's "Globo" collection
 * @method Canastilla          setMantenimientoCanastilla() Sets the current record's "MantenimientoCanastilla" collection
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCanastilla extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('canastilla');
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
        $this->hasColumn('tipo_canastilla_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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

        $this->hasOne('TipoCanastilla', array(
             'local' => 'tipo_canastilla_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('Globo', array(
             'local' => 'id',
             'foreign' => 'canastilla_id'));

        $this->hasMany('MantenimientoCanastilla', array(
             'local' => 'id',
             'foreign' => 'canastilla_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}