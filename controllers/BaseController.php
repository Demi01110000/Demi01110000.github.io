<?php


require_once './components/Menu.php';


/**
 * Abstraktní třída, která poskytuje společnou funkcionalitu pro zbývající Controllery
 * Ostatní Controllery budou z této třídy "dědit"
 */
abstract class BaseController {
  
    
    protected Request $request;
    
    private Menu $menu;
    
    private $title;

    private $varsForTemplate = [];

    /**
     * Zakladni konstruktor, ktery budou vyuzivat Controllery, ktere dedi z teto tridy
     * @param Request $request
     */
    public function __construct(Request $request) 
    {
        $this->request = $request;
        $this->menu = new Menu;
        $this->menu->setItems(Configurator::$baseMenuItems);
        $this->menu->setActiveLink($this->getControllerContentTemplate());
    }
    

    public function setTitle($title) 
    {
        $this->title = $title;
    }
    
    
    public function addVarForTemplate($key, $value) 
    {
        $this->varsForTemplate[$key] = $value;
    }     


    /**
     * Metoda vrati nazev souboru sablony pro konkretni Controller
     * @return string
     */
    public function getControllerContentTemplate() 
    {
        $controllerName = get_called_class(); // vrati volajiciho, napr. FrontController nebo AboutController
        // Odeberu cast retezce Controller
        $controllerBaseName = str_replace('Controller', '', $controllerName);
        // Vracim retezec s malymi pismeny
        return strtolower($controllerBaseName);
    }


    /**
     * Metoda vykresli response pro klienta
     */
    public function render()
    {
        // Zpřístupním proměnnou $title HTML šablonám
        $title = $this->title;
        
        // Do šablony předám objekt třídy Menu
        $mainMenu = $this->menu;
        
        // Do šablony předáme další nastavené proměnné
        extract($this->varsForTemplate);
        
        $this->getControllerContentTemplate();
        
        // Hlavicka HTML dokumentu
        require_once './inc/header.php';

        // Obsah HTML dokumentu
        $template = $this->getControllerContentTemplate();
        require_once './data/'.$template.'.php';

        // Zapati HTML dokumentu
        require_once './inc/bottom.php';
    }
    
}
