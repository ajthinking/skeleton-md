<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skeleton\Parser;
use App\Skeleton\SegmentCollection;
use App\Skeleton\Project;

require_once(base_path("tests/Unit/Parser/sampleInput.php"));

class ProjectController extends Controller
{
    public function test()
    {
        return Project::from(
            Parser::parse(MODEL_WITH_TWO_ATTRIBUTES)
        )->render();
    }
}
