<?php

/**
 * MantenimientoGlobo filter form base class.
 *
 * @package    hub-usmjesus
 * @subpackage filter
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMantenimientoGloboFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'empresa_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => true)),
      'globo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Globo'), 'add_empty' => true)),
      'fecha'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'observacion'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'realizado_por' => new sfWidgetFormFilterInput(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'     => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'empresa_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Empresa'), 'column' => 'id')),
      'globo_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Globo'), 'column' => 'id')),
      'fecha'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'observacion'   => new sfValidatorPass(array('required' => false)),
      'realizado_por' => new sfValidatorPass(array('required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'user_name'     => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('mantenimiento_globo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MantenimientoGlobo';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'empresa_id'    => 'ForeignKey',
      'globo_id'      => 'ForeignKey',
      'fecha'         => 'Date',
      'observacion'   => 'Text',
      'realizado_por' => 'Text',
      'user_id'       => 'ForeignKey',
      'user_name'     => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
