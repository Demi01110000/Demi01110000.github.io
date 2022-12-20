<?php


/**
 * Konfigurační třída poskytující přístup ke statických položkám
 */
class Configurator {
    
    
    public const APP_BASE_URL = 'http://localhost/myproject/';
    public const PROJECT_NAME = 'Zápočet do TWA';


    public const DEFAULT_PAGE_PARAM_VALUE = 'front';


    /**
     * Polozky zakladniho menu
     * @var array 
     */
    public static array $baseMenuItems = [
        'front' => 'Home',
        'about' => 'About',
        'contact' => 'Contact'
    ];
    
    
}
