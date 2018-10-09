<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Skeleton\SegmentCollection;

class SegmentCollectionTest extends TestCase
{
    
    /** @test */
    public function it_can_instanciate()
    {
        $this->assertTrue(
            (boolean) SegmentCollection::make()
        );
    }
}
