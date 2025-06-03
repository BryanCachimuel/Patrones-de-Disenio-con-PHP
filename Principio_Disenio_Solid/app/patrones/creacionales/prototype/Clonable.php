<?php 

namespace App\patrones\creacionales\prototype;

interface Clonable {

    public function clone(): Clonable;

}