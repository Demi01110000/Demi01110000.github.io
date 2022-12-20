<?php

// Zpřístupní obsah třídy BaseController
require_once './controllers/BaseController.php';

/**
 * Defaultni Controller aplikace
 */
class FrontController extends BaseController {
    
   
    /**
     * Magická metoda konstruktoru
     * Je volána automaticky v momentě, kdy je z třídy vytvořen objekt
     */
    public function __construct(Request $request) 
    {
        parent::__construct($request);
        $this->setTitle('Dimitra Pazaiti');
        $this->render();
    }
    
}
