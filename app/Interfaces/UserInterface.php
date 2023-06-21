<?php
namespace App\Interfaces;

use PhpParser\Builder\Interface_;

Interface UserInterface {
    public function store($request);

    public function edit();

    public function destroy();
}
