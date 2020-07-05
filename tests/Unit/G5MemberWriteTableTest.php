<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use SilNex\GuLa\Models\Gnu\G5Board;
use SilNex\GuLa\Models\Gnu\G5Member;

class G5MemberWriteTableTest extends TestCase
{
    public function test_g5member_write_table_auto_relation()
    {
        $g5WriteFreeFile = app_path('G5Models/G5WriteFree.php');
        if (File::exists($g5WriteFreeFile)) {
            unlink($g5WriteFreeFile);
        }

        $notExistsModel = "App\G5Models\G5WriteFree";
        $this->assertFalse(class_exists($notExistsModel));

        $g5Member = new G5Member;
        $admin = $g5Member->where('mb_id', '=', 'silnex')->first();
        $admin->g5WriteFree()->first();
        $this->assertTrue(true);
    }

    public function test_g5_write_table_with_relation()
    {
        $boards = G5Board::select('bo_table')->get()->map(function ($table) {
            Artisan::call('g5model:write ' . $table->bo_table);
            return 'g5Write' . Str::title($table->bo_table);
        })->toArray();

        $g5Member = new G5Member;
        $admin = $g5Member->where('mb_id', '=', 'silnex')->first();
        $admin->with($boards)->get();
        $this->assertTrue(true);
    }

    public function test_g5_write_table_with_relation_without_model_file()
    {
        $boards = G5Board::select('bo_table')->get()->map(function ($table) {
            $g5WriteFile = app_path('G5Models/G5Write' . Str::title($table->bo_table));
            if (File::exists($g5WriteFile)) {
                unlink($g5WriteFile);
            }

            return 'g5Write' . Str::title($table->bo_table);
        })->toArray();

        $g5Member = new G5Member;
        $admin = $g5Member->where('mb_id', '=', 'silnex')->first();
        $admin->with($boards)->get();
        $this->assertTrue(true);
    }

    public function test_g5_write_table_relation_value_without_model_file()
    {
        $boards = G5Board::select('bo_table')->get()->map(function ($table) {
            $g5WriteFile = app_path('G5Models/G5Write' . Str::title($table->bo_table));
            if (File::exists($g5WriteFile)) {
                unlink($g5WriteFile);
            }

            return 'g5Write' . Str::title($table->bo_table);
        })->toArray();

        $g5Member = new G5Member;
        $admin = $g5Member->where('mb_id', '=', 'silnex')->first();
        $this->assertNotNull($admin->g5WriteFree);
    }
}
