<?php

namespace App\Skeleton;
use File;

class Project
{
    public function __construct($skeleton)
    {
        $this->skeleton = $skeleton;
    }

    public static function from($skeleton)
    {
        return new Project($skeleton);
    }

    public function render()
    {
        File::forceMakeDirectory(
            $this->getProjectName()
        );
    }

    private function getProjectName()
    {
        $path = '/Users/anders/Code/';
        $name = 'skeleton-build-' . mt_rand(1,1);
        return $path . $name;
    }
}