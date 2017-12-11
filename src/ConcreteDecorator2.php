<?php

class ConcreteDecorator2 extends Decorator
{
    public function __construct(Component $data)
    {
        $this->value = 500;
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data->getData() . "Concrete Decorator 2:\t{$this->value}\n";
    }

    public function getValue()
    {
        return $this->value + $this->data->getValue();
    }
}