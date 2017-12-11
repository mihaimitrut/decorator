<?php

abstract class Component
{
    protected $data;
    protected $value;

    abstract public function getData();

    abstract public function getValue();
}