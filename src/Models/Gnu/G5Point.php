<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5Point extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_point';

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
    protected $fillable = ['po_id', 'mb_id', 'po_datetime', 'po_content', 'po_point', 'po_use_point', 'po_expired', 'po_expire_date', 'po_mb_point', 'po_rel_table', 'po_rel_id', 'po_rel_action'];

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
    protected $dates = ['po_datetime', 'po_expire_date'];

}
