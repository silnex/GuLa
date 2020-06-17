<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopCoupon extends G5Model
{
    /**
     * 디폴트 타임 스템프 사용 안함
     *
     * @var string
     */
    public $timestamps = false;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_coupon';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['cp_no', 'cp_id', 'cp_subject', 'cp_method', 'cp_target', 'mb_id', 'cz_id', 'cp_start', 'cp_end', 'cp_price', 'cp_type', 'cp_trunc', 'cp_minimum', 'cp_maximum', 'od_id', 'cp_datetime'];

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
    protected $dates = ['cp_start', 'cp_end', 'cp_datetime'];

}
