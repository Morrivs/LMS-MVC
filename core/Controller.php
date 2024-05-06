<?php
    namespace App\core;

use BadMethodCallException;

    abstract class Controller {
        //cuando se intente utilizar un metodo que no existe se activara esto
        public function __call($name, $arguments)
        {
            throw new BadMethodCallException(sprintf(
                'Method "%s" no esta implementado en la clase "%s".',
                $name,
                get_class(($this))
            ));
        }
    }