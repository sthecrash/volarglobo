<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ExcursionHasAdicional', 'doctrine');

/**
 * BaseExcursionHasAdicional
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $excursion_id
 * @property integer $excursion_adicional_id
 * @property integer $valor
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property Excursion $Excursion
 * @property ExcursionAdicional $ExcursionAdicional
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer               getId()                     Returns the current record's "id" value
 * @method integer               getEmpresaId()              Returns the current record's "empresa_id" value
 * @method integer               getExcursionId()            Returns the current record's "excursion_id" value
 * @method integer               getExcursionAdicionalId()   Returns the current record's "excursion_adicional_id" value
 * @method integer               getValor()                  Returns the current record's "valor" value
 * @method integer               getUserId()                 Returns the current record's "user_id" value
 * @method string                getUserName()               Returns the current record's "user_name" value
 * @method Empresa               getEmpresa()                Returns the current record's "Empresa" value
 * @method Excursion             getExcursion()              Returns the current record's "Excursion" value
 * @method ExcursionAdicional    getExcursionAdicional()     Returns the current record's "ExcursionAdicional" value
 * @method sfGuardUser           getSfGuardUser()            Returns the current record's "sfGuardUser" value
 * @method ExcursionHasAdicional setId()                     Sets the current record's "id" value
 * @method ExcursionHasAdicional setEmpresaId()              Sets the current record's "empresa_id" value
 * @method ExcursionHasAdicional setExcursionId()            Sets the current record's "excursion_id" value
 * @method ExcursionHasAdicional setExcursionAdicionalId()   Sets the current record's "excursion_adicional_id" value
 * @method ExcursionHasAdicional setValor()                  Sets the current record's "valor" value
 * @method ExcursionHasAdicional setUserId()                 Sets the current record's "user_id" value
 * @method ExcursionHasAdicional setUserName()               Sets the current record's "user_name" value
 * @method ExcursionHasAdicional setEmpresa()                Sets the current record's "Empresa" value
 * @method ExcursionHasAdicional setExcursion()              Sets the current record's "Excursion" value
 * @method ExcursionHasAdicional setExcursionAdicional()     Sets the current record's "ExcursionAdicional" value
 * @method ExcursionHasAdicional setSfGuardUser()            Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExcursionHasAdicional extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('excursion_has_adicional');
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
        $this->hasColumn('excursion_adicional_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('valor', 'integer', null, array(
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

        $this->hasOne('ExcursionAdicional', array(
             'local' => 'excursion_adicional_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}