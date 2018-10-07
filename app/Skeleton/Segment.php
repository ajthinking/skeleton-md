<?php

namespace App\Skeleton;

class Segment
{
    public function __construct($parts, $segmentIndex)
    {
        $this->parts = $parts;
        $this->segmentIndex = $segmentIndex;
    }

    public static function make($parts, $segmentIndex)
    {
        return new Segment($parts, $segmentIndex);
    }

    public function title()
    {
        return $this->parts->first();        
    }

    public function pseudoAttributes()
    {
        return $this->parts->slice(1)->values();        
    }    
}