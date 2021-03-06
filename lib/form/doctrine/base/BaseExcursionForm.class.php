<?php

/**
 * Excursion form base class.
 *
 * @method Excursion getObject() Returns the current form's model object
 *
 * @package    hub-usmjesus
 * @subpackage form
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExcursionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'empresa_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'provincia_id'      => new sfWidgetFormInputText(),
      'ciudad_id'         => new sfWidgetFormInputText(),
      'ubicacion_id'      => new sfWidgetFormInputText(),
      'nombre'            => new sfWidgetFormInputText(),
      'imagen'            => new sfWidgetFormInputText(),
      'descripcion'       => new sfWidgetFormTextarea(),
      'fecha'             => new sfWidgetFormInputText(),
      'tipo_publico'      => new sfWidgetFormInputText(),
      'capacidad_persona' => new sfWidgetFormInputText(),
      'user_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'user_name'         => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'required' => false)),
      'provincia_id'      => new sfValidatorInteger(),
      'ciudad_id'         => new sfValidatorInteger(),
      'ubicacion_id'      => new sfValidatorInteger(),
      'nombre'            => new sfValidatorString(array('max_length' => 100)),
      'imagen'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'descripcion'       => new sfValidatorString(),
      'fecha'             => new sfValidatorString(array('max_length' => 100)),
      'tipo_publico'      => new sfValidatorString(array('max_length' => 100)),
      'capacidad_persona' => new sfValidatorInteger(),
      'user_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'user_name'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('excursion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Excursion';
  }

}
