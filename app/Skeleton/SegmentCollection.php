<?php

namespace App\Skeleton;

use Illuminate\Support\Collection;

class SegmentCollection extends Collection
{
    // PUBLIC API *******************************************************************

    public function models()
    {
        return SegmentCollection::make($this->items)->filter(function($segment) {
            // Upper case first letter indicates a model
            return ctype_upper(
                $segment->parts->first()[0]
            );            
        });
    }

    public function tables()
    {
        return SegmentCollection::make($this->items)->filter(function($segment) {
            // Lower case first letter indicates a modelless table
            return ctype_lower(
                $segment->parts->first()[0]
            );            
        });
    }    

    public function manyToManyModels()
    {
        return SegmentCollection::make();
    }

    public function modellessTables()
    {
        return SegmentCollection::make();
    }
    
    public function manyToManyTableOnly()
    {
        return SegmentCollection::make();
    }


    
    // PUBLIC API END *******************************************************************

    private function isTable()
    {
        return true;
    }

    private function isModel()
    {
        return true;
    }
    
    private function isModellessTable()
    {
        return true;
    }
}