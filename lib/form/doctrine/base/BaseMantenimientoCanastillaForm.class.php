<?php

/**
 * MantenimientoCanastilla form base class.
 *
 * @method MantenimientoCanastilla getObject() Returns the current form's model object
 *
 * @package    hub-usmjesus
 * @subpackage form
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMantenimientoCanastillaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'empresa_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'canastilla_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Canastilla'), 'add_empty' => false)),
      'fecha'         => new sfWidgetFormDate(),
      'observacion'   => new sfWidgetFormTextarea(),
      'realizado_por' => new sfWidgetFormInputText(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'     => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'required' => false)),
      'canastilla_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Canastilla'))),
      'fecha'         => new sfValidatorDate(),
      'observacion'   => new sfValidatorString(),
      'realizado_por' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'user_name'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('mantenimiento_canastilla[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MantenimientoCanastilla';
  }

}
