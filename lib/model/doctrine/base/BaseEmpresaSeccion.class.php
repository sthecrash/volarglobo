<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EmpresaSeccion', 'doctrine');

/**
 * BaseEmpresaSeccion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property string $titulo
 * @property string $descripcion
 * @property string $imagen
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer        getId()          Returns the current record's "id" value
 * @method integer        getEmpresaId()   Returns the current record's "empresa_id" value
 * @method string         getTitulo()      Returns the current record's "titulo" value
 * @method string         getDescripcion() Returns the current record's "descripcion" value
 * @method string         getImagen()      Returns the current record's "imagen" value
 * @method integer        getUserId()      Returns the current record's "user_id" value
 * @method string         getUserName()    Returns the current record's "user_name" value
 * @method Empresa        getEmpresa()     Returns the current record's "Empresa" value
 * @method sfGuardUser    getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method EmpresaSeccion setId()          Sets the current record's "id" value
 * @method EmpresaSeccion setEmpresaId()   Sets the current record's "empresa_id" value
 * @method EmpresaSeccion setTitulo()      Sets the current record's "titulo" value
 * @method EmpresaSeccion setDescripcion() Sets the current record's "descripcion" value
 * @method EmpresaSeccion setImagen()      Sets the current record's "imagen" value
 * @method EmpresaSeccion setUserId()      Sets the current record's "user_id" value
 * @method EmpresaSeccion setUserName()    Sets the current record's "user_name" value
 * @method EmpresaSeccion setEmpresa()     Sets the current record's "Empresa" value
 * @method EmpresaSeccion setSfGuardUser() Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpresaSeccion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('empresa_seccion');
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
        $this->hasColumn('titulo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
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
        $this->hasColumn('imagen', 'string', 100, array(
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

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}