<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('HospedajePago', 'doctrine');

/**
 * BaseHospedajePago
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $empresa_id
 * @property integer $hospedaje_id
 * @property integer $pago_id
 * @property string $valor
 * @property integer $user_id
 * @property string $user_name
 * @property Empresa $Empresa
 * @property Hospedaje $Hospedaje
 * @property Pago $Pago
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer       getId()           Returns the current record's "id" value
 * @method integer       getEmpresaId()    Returns the current record's "empresa_id" value
 * @method integer       getHospedajeId()  Returns the current record's "hospedaje_id" value
 * @method integer       getPagoId()       Returns the current record's "pago_id" value
 * @method string        getValor()        Returns the current record's "valor" value
 * @method integer       getUserId()       Returns the current record's "user_id" value
 * @method string        getUserName()     Returns the current record's "user_name" value
 * @method Empresa       getEmpresa()      Returns the current record's "Empresa" value
 * @method Hospedaje     getHospedaje()    Returns the current record's "Hospedaje" value
 * @method Pago          getPago()         Returns the current record's "Pago" value
 * @method sfGuardUser   getSfGuardUser()  Returns the current record's "sfGuardUser" value
 * @method HospedajePago setId()           Sets the current record's "id" value
 * @method HospedajePago setEmpresaId()    Sets the current record's "empresa_id" value
 * @method HospedajePago setHospedajeId()  Sets the current record's "hospedaje_id" value
 * @method HospedajePago setPagoId()       Sets the current record's "pago_id" value
 * @method HospedajePago setValor()        Sets the current record's "valor" value
 * @method HospedajePago setUserId()       Sets the current record's "user_id" value
 * @method HospedajePago setUserName()     Sets the current record's "user_name" value
 * @method HospedajePago setEmpresa()      Sets the current record's "Empresa" value
 * @method HospedajePago setHospedaje()    Sets the current record's "Hospedaje" value
 * @method HospedajePago setPago()         Sets the current record's "Pago" value
 * @method HospedajePago setSfGuardUser()  Sets the current record's "sfGuardUser" value
 * 
 * @package    hub-usmjesus
 * @subpackage model
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHospedajePago extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hospedaje_pago');
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
        $this->hasColumn('hospedaje_id', 'integer', null, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('pago_id', 'integer', null, array(
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

        $this->hasOne('Hospedaje', array(
             'local' => 'hospedaje_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('Pago', array(
             'local' => 'pago_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}