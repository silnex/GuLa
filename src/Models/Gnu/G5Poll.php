<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5Poll extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_poll';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'po_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['po_id', 'po_subject', 'po_poll1', 'po_poll2', 'po_poll3', 'po_poll4', 'po_poll5', 'po_poll6', 'po_poll7', 'po_poll8', 'po_poll9', 'po_cnt1', 'po_cnt2', 'po_cnt3', 'po_cnt4', 'po_cnt5', 'po_cnt6', 'po_cnt7', 'po_cnt8', 'po_cnt9', 'po_etc', 'po_level', 'po_point', 'po_date', 'po_ips', 'mb_ids'];

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
    protected $dates = ['po_date'];

    public function g5PollEtcs()
    {
        return $this->hasMany(G5PollEtc::class, 'po_id', 'po_id');
    }
}
