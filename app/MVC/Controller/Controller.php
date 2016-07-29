<?php

/**
 * @author  Florian Petruschke <florian.petruschke@gmail.com>
 * @date    29.02.16  -  08:28
 * @version 1.0
 */
class Controller
{
    /**
     * @var Object  The F3 object
     */
    protected $f3;

    function __construct()
    {
        // setting the f3 instance and make it useable
        $f3 = Base::instance();
        $this->f3 = $f3;
    }

    // function is called before every single routing!
    function beforeroute() {

    }

    // function is called after every single routing!
    function afterroute() {

    }

}