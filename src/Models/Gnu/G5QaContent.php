<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5QaContent extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_qa_content';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'qa_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['qa_id', 'qa_num', 'qa_parent', 'qa_related', 'mb_id', 'qa_name', 'qa_email', 'qa_hp', 'qa_type', 'qa_category', 'qa_email_recv', 'qa_sms_recv', 'qa_html', 'qa_subject', 'qa_content', 'qa_status', 'qa_file1', 'qa_source1', 'qa_file2', 'qa_source2', 'qa_ip', 'qa_datetime', 'qa_1', 'qa_2', 'qa_3', 'qa_4', 'qa_5'];

    /**
     * 숨길 속성(컬럼)
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * 속성별 결과 변환 설정
     *
     * @var array
     */
    protected $casts = [];

    /**
     * 시간 속성(컬럼)
     *
     * @var array
     */
    protected $dates = ['qa_datetime'];

    public function child()
    {
        $this->hasOne(self::class, 'qa_parent', 'qa_id');
    }

    public function parent()
    {
        $this->hasOne(self::class, 'qa_id', 'qa_parent');
    }
}
