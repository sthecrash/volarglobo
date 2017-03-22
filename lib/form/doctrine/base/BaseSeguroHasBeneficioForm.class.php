<?php

/**
 * SeguroHasBeneficio form base class.
 *
 * @method SeguroHasBeneficio getObject() Returns the current form's model object
 *
 * @package    hub-usmjesus
 * @subpackage form
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSeguroHasBeneficioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'empresa_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'seguro_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Seguro'), 'add_empty' => false)),
      'seguro_beneficio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SeguroBeneficio'), 'add_empty' => false)),
      'valor'               => new sfWidgetFormInputText(),
      'user_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'           => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'required' => false)),
      'seguro_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Seguro'))),
      'seguro_beneficio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SeguroBeneficio'))),
      'valor'               => new sfValidatorInteger(),
      'user_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'user_name'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('seguro_has_beneficio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeguroHasBeneficio';
  }

}
