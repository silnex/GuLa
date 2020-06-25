<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class GenerateG5WriteModelTest extends TestCase
{
    public function test_generate_g5_write_model()
    {
        $g5WriteFreeFile = app_path('G5WriteModels/G5WriteFree.php');

        if (File::exists($g5WriteFreeFile)) {
            unlink($g5WriteFreeFile);
        }

        $this->assertFalse(File::exists($g5WriteFreeFile));

        Artisan::call('g5model:write free');

        $this->assertTrue(File::exists($g5WriteFreeFile));

        $expectedContents = <<<CLASS
<?php

namespace App\G5WriteModels;

use SilNex\GuLa\G5Model;
use SilNex\GuLa\Traits\BelongToG5Member;

class G5WriteFree extends G5Model
{
    use BelongToG5Member;

    protected \$table = 'g5_write_free';
}

CLASS;
        $this->assertEquals($expectedContents, file_get_contents($g5WriteFreeFile));
    }
}
