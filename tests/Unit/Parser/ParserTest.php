<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Skeleton\Parser;
use App\Skeleton\SegmentCollection;

require_once(__DIR__ . "/sampleInput.php");

class ParserTest extends TestCase
{
    /** @test */
    public function Parser_returns_a_SegmentCollection()
    {
        $this->assertTrue(
               get_class(Parser::parse(EMPTY_PSEUDO_CODE)) == SegmentCollection::class
        );
    }
    
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
        $this->assertTrue(
               Parser::parse(THREE_MODELS_WITH_ATTRIBUTES)->count() == 3
            && Parser::parse(THREE_MODELS_WITH_ATTRIBUTES_PRECIDING_DIRT)->count() == 3
            && Parser::parse(THREE_MODELS_WITH_ATTRIBUTES_TRAILING_DIRT)->count() == 3
            && Parser::parse(THREE_MODELS_WITH_ATTRIBUTES_EXTRA_SPACES)->count() == 3
        );
    }

    /** @test */
    public function models_can_be_extracted_with_a_models_scope()
    {
        $this->assertTrue(
            Parser::parse(THREE_MODELS_WITH_ATTRIBUTES)->models()->count() == 3        
        );
    }

    /** @test */
    public function models_scope_ignore_non_model_segments()
    {
        $this->assertTrue(
            Parser::parse(THREE_MODELS_AND_ONE_NON_MODEL)->models()->count() == 3        
        );
    }

    /** @test */
    public function modelless_tables_can_be_extracted_with_a_tables_scope()
    {
        $this->assertTrue(
            Parser::parse(THREE_MODELS_AND_ONE_NON_MODEL)->tables()->count() == 1        
        );
    }

    /** @test */
    public function many_to_many_modelless_tables_can_be_extracted_with_a_scope()
    {
        $this->assertTrue(
            Parser::parse(CAR_USER_WITH_MANY_TO_MANY_MODELLESS)
                ->manyToManyModelless()->count() == 1
        );

        $this->assertTrue(
            Parser::parse(CAR_USER_WITH_MANY_TO_MANY_MODELLESS_AND_PURE_TABLE)
                ->manyToManyModelless()->count() == 1
        );                
    }
    
    /** @test */
    // public function many_to_many_using_model_can_be_extracted_with_a_scope()
    // {
    //     $this->assertTrue(
    //         Parser::parse(CAR_USER_RENTAL_WITH_MANY_TO_MANY_USING_MODEL)
    //             ->manyToManyModels()->count() == 1
    //     );               
    // }    
}
