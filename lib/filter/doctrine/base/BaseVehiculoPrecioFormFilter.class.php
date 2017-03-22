<?php

/**
 * VehiculoPrecio filter form base class.
 *
 * @package    hub-usmjesus
 * @subpackage filter
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVehiculoPrecioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresa_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'vehiculo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Vehiculo'), 'add_empty' => true)),
      'provincia_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Provincia'), 'add_empty' => true)),
      'ciudad_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ciudad'), 'add_empty' => true)),
      'ubicacion_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ubicacion'), 'add_empty' => true)),
      'provincia_final_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProvinciaFinal'), 'add_empty' => true)),
      'ciudad_final_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CiudadFinal'), 'add_empty' => true)),
      'ubicacion_final_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UbicacionFinal'), 'add_empty' => true)),
      'precio'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'          => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'empresa_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'vehiculo_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Vehiculo'), 'column' => 'id')),
      'provincia_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Provincia'), 'column' => 'id')),
      'ciudad_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ciudad'), 'column' => 'id')),
      'ubicacion_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ubicacion'), 'column' => 'id')),
      'provincia_final_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ProvinciaFinal'), 'column' => 'id')),
      'ciudad_final_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CiudadFinal'), 'column' => 'id')),
      'ubicacion_final_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UbicacionFinal'), 'column' => 'id')),
      'precio'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'user_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'user_name'          => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('vehiculo_precio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VehiculoPrecio';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'empresa_id'         => 'ForeignKey',
      'vehiculo_id'        => 'ForeignKey',
      'provincia_id'       => 'ForeignKey',
      'ciudad_id'          => 'ForeignKey',
      'ubicacion_id'       => 'ForeignKey',
      'provincia_final_id' => 'ForeignKey',
      'ciudad_final_id'    => 'ForeignKey',
      'ubicacion_final_id' => 'ForeignKey',
      'precio'             => 'Number',
      'user_id'            => 'ForeignKey',
      'user_name'          => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
