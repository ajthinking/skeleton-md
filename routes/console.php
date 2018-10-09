<?php

use App\Skeleton\Parser;

Artisan::command('skeleton:new', function () {
    $myfile = fopen("skeleton.md", "w");
    $this->comment("Created skeleton.md file");
});

Artisan::command('skeleton:sample', function () {
    $myfile = fopen("skeleton.md", "w");
    $this->comment("Putting a sample project in skeleton.md");
});

Artisan::command('skeleton:help', function () {
    $this->comment("There is no help at the moment.");
});

Artisan::command('skeleton:run', function () {
    $myfile = fopen("skeleton.md", "r") or die("Unable to open file!");
    $content = fread($myfile, filesize("skeleton.md"));

    $segments = Parser::parse($content);
    dd($segments->models());
    /*
        App\MigrationGenerator    
        App\ModelGenerator
        App\ControllerGenerator
        App\RoutesGenerator
    */

    $this->comment("Creating your app");
});