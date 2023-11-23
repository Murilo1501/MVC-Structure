<?php

namespace App\Controller;

interface Controller{
    public function index();
    public function create();
    public function store();
    public function edit();
    public function update();
    public function destroy();
    public function show(); //método opcional
}