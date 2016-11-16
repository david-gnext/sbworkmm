<?php

namespace Common\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Phalcon\Mvc\Controller;

abstract class BaseController extends Controller {
    
    public function initialize() {
        $this->view->baseUrl = $this->url->getBaseUri();
        $this->assets->addCss("css/w3.css");
        $this->assets->addCss("css/common.css");
    }
}
