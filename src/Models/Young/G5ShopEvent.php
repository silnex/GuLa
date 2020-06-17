<?php

namespace SilNex\GuLa\Models\Young;

use Illuminate\Database\Eloquent\Model;

class G5ShopEvent extends Model
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
    protected $table = 'g5_shop_event';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['ev_id', 'ev_skin', 'ev_mobile_skin', 'ev_img_width', 'ev_img_height', 'ev_list_mod', 'ev_list_row', 'ev_mobile_img_width', 'ev_mobile_img_height', 'ev_mobile_list_mod', 'ev_mobile_list_row', 'ev_subject', 'ev_subject_strong', 'ev_head_html', 'ev_tail_html', 'ev_use'];

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