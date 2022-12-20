<?php

/**
 * Třída, která poskytuje přístup k datum HTTP Requestu
 */
class Request {
    
    /**
     * Vrací hodnotu parametru z Query casti URL
     * @param string $param
     * @return string|null
     */
    public function getParamFromUrl($param) 
    {
        return filter_input(INPUT_GET, $param);   //$_GET['page'];
    }
    
    
    /**
     * Vrati v poli vsechna odeslana data metodou POST
     * @return type
     */
    public function getDataFromPost() 
    {
        return filter_input_array(INPUT_POST);
    }
    
    
    /**
     * Vrati konkretniho hodnotu odeslanou metodou POST podle klice
     * Klice jsou hodnoty atrinutu name u formularovych prvku
     * @param string $key
     * @return mixed|null
     */
    public function getValueFromPost($key) 
    {
        return filter_input(INPUT_POST, $key);   //$_POST['email'];
    }
    
    
    
    
}
