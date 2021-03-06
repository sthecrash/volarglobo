<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ExcursionPrecio', 'doctrine');

/**
 * BaseExcursionPrecio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $excursion_id
 * @property float $precio
 * @property integer $numero_adulto
 * @property integer $numero_ninno
 * @property integer $numero_tercera_edad
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property Excursion $Excursion
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer         getId()                  Returns the current record's "id" value
 * @method integer         getEmpresaId()           Returns the current record's "empresa_id" value
 * @method integer         getExcursionId()         Returns the current record's "excursion_id" value
 * @method float           getPrecio()              Returns the current record's "precio" value
 * @method integer         getNumeroAdulto()        Returns the current record's "numero_adulto" value
 * @method integer         getNumeroNinno()         Returns the current record's "numero_ninno" value
 * @method integer         getNumeroTerceraEdad()   Returns the current record's "numero_tercera_edad" value
 * @method integer         getUserId()              Returns the current record's "user_id" value
 * @method string          getUserName()            Returns the current record's "user_name" value
 * @method Empresa         getEmpresa()             Returns the current record's "Empresa" value
 * @method Excursion       getExcursion()           Returns the current record's "Excursion" value
 * @method sfGuardUser     getSfGuardUser()         Returns the current record's "sfGuardUser" value
 * @method ExcursionPrecio setId()                  Sets the current record's "id" value
 * @method ExcursionPrecio setEmpresaId()           Sets the current record's "empresa_id" value
 * @method ExcursionPrecio setExcursionId()         Sets the current record's "excursion_id" value
 * @method ExcursionPrecio setPrecio()              Sets the current record's "precio" value
 * @method ExcursionPrecio setNumeroAdulto()        Sets the current record's "numero_adulto" value
 * @method ExcursionPrecio setNumeroNinno()         Sets the current record's "numero_ninno" value
 * @method ExcursionPrecio setNumeroTerceraEdad()   Sets the current record's "numero_tercera_edad" value
 * @method ExcursionPrecio setUserId()              Sets the current record's "user_id" value
 * @method ExcursionPrecio setUserName()            Sets the current record's "user_name" value
 * @method ExcursionPrecio setEmpresa()             Sets the current record's "Empresa" value
 * @method ExcursionPrecio setExcursion()           Sets the current record's "Excursion" value
 * @method ExcursionPrecio setSfGuardUser()         Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExcursionPrecio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('excursion_precio');
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
        $this->hasColumn('excursion_id', 'integer', null, array(
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => 18,
             'scale' => '2',
             ));
        $this->hasColumn('numero_adulto', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('numero_ninno', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('numero_tercera_edad', 'integer', null, array(
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

        $this->hasOne('Excursion', array(
             'local' => 'excursion_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}