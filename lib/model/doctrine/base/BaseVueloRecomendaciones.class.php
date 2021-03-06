<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VueloRecomendaciones', 'doctrine');

/**
 * BaseVueloRecomendaciones
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $proveedor_vuelo_id
 * @property integer $tipo_recomendaciones_id
 * @property string $valor
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property ProveedorVuelo $ProveedorVuelo
 * @property TipoRecomendaciones $TipoRecomendaciones
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer              getId()                      Returns the current record's "id" value
 * @method integer              getEmpresaId()               Returns the current record's "empresa_id" value
 * @method integer              getProveedorVueloId()        Returns the current record's "proveedor_vuelo_id" value
 * @method integer              getTipoRecomendacionesId()   Returns the current record's "tipo_recomendaciones_id" value
 * @method string               getValor()                   Returns the current record's "valor" value
 * @method integer              getUserId()                  Returns the current record's "user_id" value
 * @method string               getUserName()                Returns the current record's "user_name" value
 * @method Empresa              getEmpresa()                 Returns the current record's "Empresa" value
 * @method ProveedorVuelo       getProveedorVuelo()          Returns the current record's "ProveedorVuelo" value
 * @method TipoRecomendaciones  getTipoRecomendaciones()     Returns the current record's "TipoRecomendaciones" value
 * @method sfGuardUser          getSfGuardUser()             Returns the current record's "sfGuardUser" value
 * @method VueloRecomendaciones setId()                      Sets the current record's "id" value
 * @method VueloRecomendaciones setEmpresaId()               Sets the current record's "empresa_id" value
 * @method VueloRecomendaciones setProveedorVueloId()        Sets the current record's "proveedor_vuelo_id" value
 * @method VueloRecomendaciones setTipoRecomendacionesId()   Sets the current record's "tipo_recomendaciones_id" value
 * @method VueloRecomendaciones setValor()                   Sets the current record's "valor" value
 * @method VueloRecomendaciones setUserId()                  Sets the current record's "user_id" value
 * @method VueloRecomendaciones setUserName()                Sets the current record's "user_name" value
 * @method VueloRecomendaciones setEmpresa()                 Sets the current record's "Empresa" value
 * @method VueloRecomendaciones setProveedorVuelo()          Sets the current record's "ProveedorVuelo" value
 * @method VueloRecomendaciones setTipoRecomendaciones()     Sets the current record's "TipoRecomendaciones" value
 * @method VueloRecomendaciones setSfGuardUser()             Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVueloRecomendaciones extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vuelo_recomendaciones');
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
        $this->hasColumn('tipo_recomendaciones_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
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

        $this->hasOne('TipoRecomendaciones', array(
             'local' => 'tipo_recomendaciones_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}