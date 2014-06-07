<?php


namespace ImagickDemo\ControlElement;


use Intahwebz\Request;


class G extends ValueElement {

    private $defaultGreen;

    function __construct(Request $request, $defaultG = 100) {
        $this->defaultGreen = $defaultG;
        parent::__construct($request);
    }
    
    
    protected function getDefault() {
        return $this->defaultGreen;
    }

    protected function getMin() {
        return 0;
    }

    protected function getMax() {
        return 255;
    }

    protected function getVariableName() {
        return 'g';
    }

    protected function getDisplayName() {
        return 'Green';
    }

    function getG() {
        return $this->getValue();
    }
}

