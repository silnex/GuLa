<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use SilNex\GuLa\Models\Gnu\G5Board;

class AutoGenerateG5WriteModels extends TestCase
{
    public function test_auto_generate_g5_models()
    {
        $boards = Arr::flatten(G5Board::select('bo_table')->get()->toArray());

        foreach ($boards as $board) {
            $g5MyModelFile = app_path('G5Models/G5Write' . Str::title($board) . '.php');
            if (File::exists($g5MyModelFile)) {
                unlink($g5MyModelFile);
            }
        }

        Artisan::call('g5model:write-all');

        foreach ($boards as $board) {
            $g5MyModelFile = app_path('G5Models/G5Write' . Str::title($board) . '.php');
            $this->assertTrue(File::exists($g5MyModelFile));
        }
    }
}
