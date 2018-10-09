<?php

namespace App\Skeleton;
use App\Skeleton\Segment;
use App\Skeleton\SegmentCollection;


class Parser
{
    public function __construct()
    {
        $this->segmentIndex = 0;
    }

    public static function make()
    {
        return new Parser();
    }

    public static function parse($text)
    {
        $parser = Parser::make();
        return $parser->segment(
            $parser->cleanUp($text)
        );        
    }

    public function cleanUp($text)
    {
        
        // trim preciding newlines/space
        $text = preg_replace('/^\s+/', '', $text);
        // trim trailing newlines/space
        $text = preg_replace('/\s+$/', '', $text);
        // For each line, remove preciding space
        $text = preg_replace('/^[^\S\n]+/m', '', $text);
        // For each line, remove trailing space
        $text = preg_replace('/[^\S\n]+$/m', '', $text);        
        // remove exessive newlines
        $text = preg_replace('/\n{3,}/', '\n\n', $text);
        // remove comments
        $text = preg_replace('/^\/\/.*$/m', '', $text);
        $text = preg_replace('/\/\*[\s\S]*?\*\/|([^\\:]|^)\/\/.*$/m', '', $text);        
        return $text;        
        
    }

    private function segment($text)
    {
        return SegmentCollection::make(
            preg_split('/\n\s*\n/', $text) // Split by line groups
        )->filter(function($item) {
            return $item != "";
        })->map(function($segment) {
            $this->segmentIndex++;
            return new Segment(
                collect(preg_split('/\n/', $segment)),
                $this->segmentIndex
            );
        });
    }
}