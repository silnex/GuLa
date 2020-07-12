<?php

namespace SilNex\GuLa\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class GenerateG5WriteModelTest extends TestCase
{
    public function test_generate_g5_write_model()
    {
        $g5WriteFreeFile = app_path('G5Models/G5WriteFree.php');

        if (File::exists($g5WriteFreeFile)) {
            unlink($g5WriteFreeFile);
        }

        $this->assertFalse(File::exists($g5WriteFreeFile));

        Artisan::call('g5model:write free');

        $this->assertTrue(File::exists($g5WriteFreeFile));

        $expectedContents = <<<CLASS
<?php

namespace App\G5Models;

use SilNex\GuLa\G5Model;
use SilNex\GuLa\Traits\BelongToG5Member;

class G5WriteFree extends G5Model
{
    use BelongToG5Member;

    protected \$table = 'g5_write_free';

    protected \$bo_table = 'free';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected \$primaryKey = 'wr_id';

    /**
     * 할당(수정) 불가능한 속성(컬럼)
     *
     * @var array
     */
    protected \$fillable = ['wr_id', 'wr_num', 'wr_reply', 'wr_parent', 'wr_is_comment', 'wr_comment', 'wr_comment_reply', 'ca_name', 'wr_option', 'wr_subject', 'wr_content', 'wr_seo_title', 'wr_link1', 'wr_link2', 'wr_link1_hit', 'wr_link2_hit', 'wr_hit', 'wr_good', 'wr_nogood', 'mb_id', 'wr_password', 'wr_name', 'wr_email', 'wr_homepage', 'wr_datetime', 'wr_file', 'wr_last', 'wr_ip', 'wr_facebook_user', 'wr_twitter_user', 'wr_1', 'wr_2', 'wr_3', 'wr_4', 'wr_5', 'wr_6', 'wr_7', 'wr_8', 'wr_9', 'wr_10'];

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
    protected \$dates = ['wr_datetime'];

    /**
     * 댓글 리스트
     */
    public function comments()
    {
        return \$this->hasMany(G5WriteFree::class, 'wr_parent', 'wr_id')->where('wr_is_comment', '=', '1');
    }

    /**
     * 댓글이라면, 게시글을 보여줌
     */
    public function parent()
    {
        if (\$this->wr_is_comment) {
            return \$this->belongsTo(G5WriteFree::class, 'wr_id', 'wr_parent')->where('wr_is_comment', '=', '0');
        } else {
            throw new \Exception("해당 글은 댓글이 아닙니다.");
        }
    }

    /**
     * 게시판에 첨부된 파일을 가져옴
     */
    public function files()
    {
        return \$this->hasMany(G5BoardFile::class, 'wr_id', 'wr_id')->where('bo_table', \$this->bo_table);
    }
}

CLASS;
        $this->assertEquals($expectedContents, file_get_contents($g5WriteFreeFile));
    }
}
