<?php
namespace Top\Controllers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Common\Controllers\BaseController;

class IndexController extends BaseController {
    
    public function indexAction() {
        $this->assets->addCss("apps/top/css/base.css");
        $this->assets->addJs("apps/top/js/base.js");
    }
    
    public function normalAction() {
        
    }
    
}
