<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Categoria', 'doctrine');

/**
 * BaseCategoria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $tipo_id
 * @property integer $padre
 * @property integer $orden
 * @property string $nombre
 * @property string $mancheta
 * @property string $descripcion_breve
 * @property integer $status
 * @property string $keywords
 * @property string $imagen
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $Proveedor
 * @property Doctrine_Collection $ProveedorDescuento
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method integer             getEmpresaId()          Returns the current record's "empresa_id" value
 * @method integer             getTipoId()             Returns the current record's "tipo_id" value
 * @method integer             getPadre()              Returns the current record's "padre" value
 * @method integer             getOrden()              Returns the current record's "orden" value
 * @method string              getNombre()             Returns the current record's "nombre" value
 * @method string              getMancheta()           Returns the current record's "mancheta" value
 * @method string              getDescripcionBreve()   Returns the current record's "descripcion_breve" value
 * @method integer             getStatus()             Returns the current record's "status" value
 * @method string              getKeywords()           Returns the current record's "keywords" value
 * @method string              getImagen()             Returns the current record's "imagen" value
 * @method integer             getUserId()             Returns the current record's "user_id" value
 * @method string              getUserName()           Returns the current record's "user_name" value
 * @method Empresa             getEmpresa()            Returns the current record's "Empresa" value
 * @method sfGuardUser         getSfGuardUser()        Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getProveedor()          Returns the current record's "Proveedor" collection
 * @method Doctrine_Collection getProveedorDescuento() Returns the current record's "ProveedorDescuento" collection
 * @method Categoria           setId()                 Sets the current record's "id" value
 * @method Categoria           setEmpresaId()          Sets the current record's "empresa_id" value
 * @method Categoria           setTipoId()             Sets the current record's "tipo_id" value
 * @method Categoria           setPadre()              Sets the current record's "padre" value
 * @method Categoria           setOrden()              Sets the current record's "orden" value
 * @method Categoria           setNombre()             Sets the current record's "nombre" value
 * @method Categoria           setMancheta()           Sets the current record's "mancheta" value
 * @method Categoria           setDescripcionBreve()   Sets the current record's "descripcion_breve" value
 * @method Categoria           setStatus()             Sets the current record's "status" value
 * @method Categoria           setKeywords()           Sets the current record's "keywords" value
 * @method Categoria           setImagen()             Sets the current record's "imagen" value
 * @method Categoria           setUserId()             Sets the current record's "user_id" value
 * @method Categoria           setUserName()           Sets the current record's "user_name" value
 * @method Categoria           setEmpresa()            Sets the current record's "Empresa" value
 * @method Categoria           setSfGuardUser()        Sets the current record's "sfGuardUser" value
 * @method Categoria           setProveedor()          Sets the current record's "Proveedor" collection
 * @method Categoria           setProveedorDescuento() Sets the current record's "ProveedorDescuento" collection
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategoria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categoria');
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
             ));
        $this->hasColumn('tipo_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('padre', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('orden', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
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
        $this->hasColumn('mancheta', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('descripcion_breve', 'string', 255, array(
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
        $this->hasColumn('keywords', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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

        $this->hasMany('Proveedor', array(
             'local' => 'id',
             'foreign' => 'categoria_id'));

        $this->hasMany('ProveedorDescuento', array(
             'local' => 'id',
             'foreign' => 'categoria_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'nombre',
             ),
             'uniqueBy' => 
             array(
              0 => 'nombre',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}