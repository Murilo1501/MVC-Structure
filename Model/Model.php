<?php

namespace App\Model;

interface Model{
    public function create();
    public function read();
    public function update();
    public function delete();
}