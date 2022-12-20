<?php

// Zpřístupní obsah třídy BaseController
require_once './controllers/BaseController.php';

/**
 * Dalsi Controller aplikace
 */
class ContactController extends BaseController {
    
    
    /**
     * Magická metoda konstruktoru
     * Je volána automaticky v momentě, kdy je z třídy vytvořen objekt
     */
    public function __construct(Request $request) 
    {
        parent::__construct($request);
        $this->setTitle('Contact');
        $this->checkEmail();
        $this->render();
    }
    
    /**
     * Metoda bude zpracovávat AJAX pozadavek aplikace
     */
    public function checkEmail() 
    {
        $email = $this->request->getValueFromPost('email');
        Tracy\Debugger::barDump($email, 'checkEmail');
    }
  
}
