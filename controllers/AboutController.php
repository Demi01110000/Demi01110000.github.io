<?php

// Zpřístupní obsah třídy BaseController
require_once './controllers/BaseController.php';

/**
 * Dalsi Controller aplikace
 */
class AboutController extends BaseController {
    
    
    /**
     * Magická metoda konstruktoru
     * Je volána automaticky v momentě, kdy je z třídy vytvořen objekt
     */
    public function __construct(Request $request) 
    {
        parent::__construct($request);
        $this->setTitle('About');
        $this->checkRegisterForm();
        $this->render();
    }
    
    
    public function checkRegisterForm() 
    {
        // Získám data odeslaná metodou POST
        $data = $this->request->getDataFromPost();
        Tracy\Debugger::barDump($data);
        // Ověříme, zda byl formulář odeslán
        if ($data && array_key_exists('registerSubmit', $data)) {
            // Zalogujeme odeslaná data
            Tracy\Debugger::log($data, 'register.data');
            // Uložíme do souboru CSV
            unset($data['registerSubmit']);
            $dataForCSV = implode(';', $data);
            file_put_contents('data.csv', $dataForCSV . PHP_EOL, FILE_APPEND);
            
            // Pošlu do šablony info o registraci
            $this->addVarForTemplate('registerResult', 'Vaše registrace byla provedena');
             

        }
    }
  
}
