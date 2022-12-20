<?php

/**
 * Hlavní zaváděcí třída aplikace
 * Zpracuje HTTP požadavek a předá řízení odpovídajícímu Controlleru
 */
class Application {
    
    // Udrzuje zde objekt tridy Request pristupny vsem metodam 
    private $request = null;
    
    
    
    public function __construct() 
    {
        // Ukolem je vytvořit a do vlastnosti třídy uložit objekt třídy Request
        require_once './services/Request.php';
        $this->request = new Request();
    }
    
    
    public function run() 
    {
        // Ziskam hodnotu parametru page z URL
        $page = $this->request->getParamFromUrl('page'); // about, front, contact 

        // Pokud parametr v URL neexituje, inicializujeme defaultni Controller
        if (!$page) {
            $page = Configurator::DEFAULT_PAGE_PARAM_VALUE;
        }

        // Vytvorim lokalni promennou nazvu Controlleru
        $controllerName = ucfirst($page) . 'Controller';
        
        // Cesta k souboru Controlleru
        $controllerFilePath = './controllers/' . $controllerName . '.php';
        
        // Overeni existence Controlleru podle pozadavku z URL
        // Pokud Controller neexituje, presmerujeme uzivatele na chybovy Controller
        if (!file_exists($controllerFilePath)) {
            header('Location: ?page=error');
            exit();
        } 
        
        // Zpřístupním obsah třídy Controleru
        require_once $controllerFilePath;
        
        // Inicializuju Controller a predavam mu rizeni
        new $controllerName($this->request);
    }
    
    
}
