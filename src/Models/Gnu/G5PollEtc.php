<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5PollEtc extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_poll_etc';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'pc_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['pc_id', 'po_id', 'mb_id', 'pc_name', 'pc_idea', 'pc_datetime'];

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
    protected $dates = ['pc_datetime'];

    public function g5Poll()
    {
        return $this->belongsTo(G5Poll::class, 'po_id', 'po_id');
    }
}
