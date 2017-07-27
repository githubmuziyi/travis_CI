<?php

/**
 * Created by PhpStorm.
 * User: hewei
 * Date: 2016/12/18
 * Time: 下午5:49
 */
class MY_Router extends CI_Router {

    function MY_Router() {
        parent::CI_Router();
    }

    function _validate_request($segments) {
        die;
    }
}