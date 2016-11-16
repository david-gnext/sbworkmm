<?php

namespace Index\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Common\Controllers\BaseController;
class IndexController  extends BaseController {
    
    public function initialize() {
        parent::initialize();
    }

    public function indexAction() {
        $this->assets->addCss('css/product.css');
        $this->assets->addJs('js/product.js');
    }       
    
    public function productAction() {
        
    }     
}
