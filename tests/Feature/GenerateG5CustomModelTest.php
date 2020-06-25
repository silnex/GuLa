<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class GenerateG5CustomModelTest extends TestCase
{
    public function test_generate_g5_custom_model()
    {
        $g5MyModelFile = app_path('G5Models/G5MyModel.php');

        if (File::exists($g5MyModelFile)) {
            unlink($g5MyModelFile);
        }

        $this->assertFalse(File::exists($g5MyModelFile));

        Artisan::call('g5model:make g5_my_model');

        $this->assertTrue(File::exists($g5MyModelFile));

        $expectedContents = <<<CLASS
<?php

namespace App\G5Models;

use SilNex\GuLa\G5Model;

class G5MyModel extends G5Model
{
    protected \$table = 'g5_my_model';

    /**
     * 할당(수정) 불가능한 속성(컬럼)
     *
     * @var array
     */
    protected \$guarded = [];

    /**
     * 숨길 속성(컬럼)
     *
     * @var array
     */
    protected \$hidden = [];

    /**
     * 속성별 결과 변환 설정
     *
     * @var array
     */
    protected \$casts = [];

    /**
     * 시간 속성(컬럼)
     *
     * @var array
     */
    protected \$dates = [];
}

CLASS;
        $this->assertEquals($expectedContents, file_get_contents($g5MyModelFile));
    }
}
