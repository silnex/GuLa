<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5Memo extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_memo';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['me_id', 'me_recv_mb_id', 'me_send_mb_id', 'me_send_datetime', 'me_read_datetime', 'me_memo', 'me_send_id', 'me_type', 'me_send_ip'];

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
    protected $dates = ['me_send_datetime', 'me_read_datetime'];

    public function g5MemberSender()
    {
        return $this->belongsTo(G5Member::class, 'me_send_mb_id');
    }

    public function g5MemberReceiver()
    {
        return $this->belongsTo(G5Member::class, 'me_recv_mb_id');
    }

}
