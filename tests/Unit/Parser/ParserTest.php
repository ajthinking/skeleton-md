<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Skeleton\Parser;

require_once(__DIR__ . "/sampleInput.php");

class ParserTest extends TestCase
{
    
    /** @test */
    public function empty_string_returns_empty_collection()
    {
        $this->assertTrue(
               Parser::parse(EMPTY_PSEUDO_CODE)->isEmpty()
            && Parser::parse(EMPTY_PSEUDO_CODE_WITH_DIRT)->isEmpty()
        );
    }

    /** @test */
    public function model_with_two_attributes_returns_collection_of_size_one()
    {
        
        $this->assertTrue(
               Parser::parse(MODEL_WITH_TWO_ATTRIBUTES)->count() == 1
            && Parser::parse(MODEL_WITH_TWO_ATTRIBUTES_PRECIDING_DIRT)->count() == 1
            && Parser::parse(MODEL_WITH_TWO_ATTRIBUTES_TRAILING_DIRT)->count() == 1
            && Parser::parse(MODEL_WITH_TWO_ATTRIBUTES_EXTRA_SPACES)->count() == 1
            && Parser::parse(MODEL_WITH_TWO_ATTRIBUTES_WITH_INTERNAL_SPACING)->count() == 1                        
        );
    }

    /** @test */
    public function three_models_with_attributes_returns_collection_of_size_three()
    {
        //dd(Parser::parse(THREE_MODEL_WITH_ATTRIBUTES));
        $this->assertTrue(
               Parser::parse(THREE_MODEL_WITH_ATTRIBUTES)->count() == 3
            && Parser::parse(THREE_MODEL_WITH_ATTRIBUTES_PRECIDING_DIRT)->count() == 3
            && Parser::parse(THREE_MODEL_WITH_ATTRIBUTES_TRAILING_DIRT)->count() == 3
            && Parser::parse(THREE_MODEL_WITH_ATTRIBUTES_EXTRA_SPACES)->count() == 3
        );
    }
}