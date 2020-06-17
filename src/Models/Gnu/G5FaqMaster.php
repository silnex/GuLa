<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5FaqMaster extends Model
{
    /**
     * 디폴트 타임 스템프 사용 안함
     *
     * @var string
     */
    protected $timestamps = false;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_faq_master';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['fm_id', 'fm_subject', 'fm_head_html', 'fm_tail_html', 'fm_mobile_head_html', 'fm_mobile_tail_html', 'fm_order'];

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
    protected $dates = [];

}
