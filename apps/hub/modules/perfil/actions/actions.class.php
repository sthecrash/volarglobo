<?php

/**
 * cobro actions.
 *
 * @package    hub-usmjesus
 * @subpackage cobro
 * @author     Jesus Salazar - usmjesus@gmail.com
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class perfilActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      
      $perfiles = new sfGuardPermission();
      $this->perfiles = $perfiles->getsfGuardPermissions();
        
  }

  public function executeNew(sfWebRequest $request)
  {
       //Recibe la variable IdUser para poder asociarlo al usuario
     
         //Armado del Objeto Mensaje Alerta
         $perfil = new sfGuardPermission();
         //Arma Formulario Mensaje Alerta para el usuario en cuestion
         $this->form = new sfGuardPermissionForm($perfil);
         

    
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardPermissionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($perfil = Doctrine_Core::getTable('sfGuardPermission')->find(array($request->getParameter('id'))), sprintf('Object cobro does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardPermissionForm($perfil);
    
         
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($perfil = Doctrine_Core::getTable('sfGuardPermission')->find(array($request->getParameter('id'))), sprintf('Object cobro does not exist (%s).', $request->getParameter('id')));
    

    $this->form = new sfGuardPermissionForm($perfil);
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
    
    
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($perfil = Doctrine_Core::getTable('sfGuardPermission')->find(array($request->getParameter('id'))), sprintf('Object cobro does not exist (%s).', $request->getParameter('id')));
    
    try {
           $perfil->delete();
           $this->getUser()->setFlash('eliminar', 'El Item fué removido exitosamente.'); 
           
          
      } catch (Doctrine_Exception $e) {
          $this->getUser()->setFlash('noeliminar', 'No se puedo eliminar el item, existen referencias a esta entrada.'); 
          
      }
      $this->redirect('perfil/index');
      
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $perfil = $form->save();
      
      $this->getUser()->setFlash('notice', 'Realizado de forma exitosa la operación'); 
      
      $this->setTemplate('edit');

    }
  }
}
