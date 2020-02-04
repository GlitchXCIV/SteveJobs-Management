<?php
interface Storage
{
    public function save($type); // $type può essere: file o DB
    public function read($type);
}