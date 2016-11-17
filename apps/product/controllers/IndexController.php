<?php
namespace Product\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Common\Controllers\BaseController;

class IndexController extends BaseController {
    
    public function indexAction() {
        $this->assets->addCss('apps/product/css/product.css');
        $this->assets->addJs('apps/product/js/product.js');
    }
    
    
}