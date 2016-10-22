<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 10/22/2016
 * Time: 3:53 PM
 */

class MyfaceController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();

        $this->layout = 'default';
    }
    public function index() {

    }
}