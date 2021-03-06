<?php

/**
 * Excursion filter form base class.
 *
 * @package    hub-usmjesus
 * @subpackage filter
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseExcursionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresa_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'provincia_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciudad_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ubicacion_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen'            => new sfWidgetFormFilterInput(),
      'descripcion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_publico'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'capacidad_persona' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'         => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'empresa_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'provincia_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciudad_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ubicacion_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'imagen'            => new sfValidatorPass(array('required' => false)),
      'descripcion'       => new sfValidatorPass(array('required' => false)),
      'fecha'             => new sfValidatorPass(array('required' => false)),
      'tipo_publico'      => new sfValidatorPass(array('required' => false)),
      'capacidad_persona' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'user_name'         => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('excursion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Excursion';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'empresa_id'        => 'ForeignKey',
      'provincia_id'      => 'Number',
      'ciudad_id'         => 'Number',
      'ubicacion_id'      => 'Number',
      'nombre'            => 'Text',
      'imagen'            => 'Text',
      'descripcion'       => 'Text',
      'fecha'             => 'Text',
      'tipo_publico'      => 'Text',
      'capacidad_persona' => 'Number',
      'user_id'           => 'ForeignKey',
      'user_name'         => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
