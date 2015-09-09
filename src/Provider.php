<?php

namespace App\Calendar;

use Budkit\Application\Support\Service;
use Budkit\Dependency\Container;
use Budkit\Filesystem\File;

class Provider implements Service {

    protected $application;

    public function __construct(Container $application) {
        $this->application = $application;
    }

    public static function  getPackageDir(){
        return __DIR__."/";
    }

    public function onRegister() {
        $application = $this->application;
        //Can Include Routes; using $this->application->route->add() or simply \Route::add().
        $application->route
            //->setResourceCallable("App\\Calendar\\Calendar")
            ->attachResource("/calendar", "App\\Calendar\\Calendar"); //collection of events
    }

    public function definition() {
        return ["app.register" => "onRegister"];
    }


}