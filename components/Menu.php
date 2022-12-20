<?php


/**
 * Jednoduchá Třída, pomocí které lze v aplikaci pracovat s menu
 */
class Menu {
    
    
    // Udržuje položky menu v poli
    private array $items = [];
    
    // Aktivni polozka menu
    private $activeLink;
    
    
    /**
     * Set metoda, která nastaví položky menu
     * @param array $items
     */
    public function setItems(array $items) 
    {
        $this->items = $items;
    }
    
    
    /**
     * Vrati z objektu položky menu
     * @return array
     */
    public function getItems() 
    {
        return $this->items;
    }
    
    
    
    /**
     * Nastaveni klice aktivni polozky menu
     * @param string $link
     */
    public function setActiveLink($link) 
    {
        $this->activeLink = $link;
    }
    
    
    /**
     * Vytvori query cast URL
     * @param string $page
     * @return string
     */
    public function createLink($page) 
    {
        if ($page === Configurator::DEFAULT_PAGE_PARAM_VALUE) {
            return Configurator::APP_BASE_URL;
        }
        return '?page='.$page;
    }
    
    
    public function isLinkActive($param) 
    {
        return $this->activeLink === $param;
    }
    
    
}
