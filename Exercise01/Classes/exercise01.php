<?php
/**
 * Created by PhpStorm.
 * User: fberdel
 * Date: 04.09.18
 * Time: 15:53
 */

namespace BlacksmithTimmet\ComposerExercise\Classes;


class exercise01
{

    private $output;

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param mixed $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

    function __construct() {
        $this->setOutput("Im BaseClass Konstruktor\n");
        echo $this->getOutput();
    }



    public function helloComposer(){
        $this->setOutput("Hello Composer");
        echo $this->getOutput();
    }
}
