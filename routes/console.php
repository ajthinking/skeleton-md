<?php

use App\Skeleton\Parser;

Artisan::command('skeleton:new', function () {
    $myfile = fopen("skeleton.md", "w");
    $this->comment("Created skeleton.md file");
});

Artisan::command('skeleton:help', function () {
    $this->comment("There is no help at the moment.");
});

Artisan::command('skeleton:run', function () {
    $myfile = fopen("skeleton.md", "r") or die("Unable to open file!");
    $content = fread($myfile,filesize("skeleton.md"));

    Parser::parse($content);

    $this->comment("Creating your app");
});