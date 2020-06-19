<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopCouponZone extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_coupon_zone';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['cz_id', 'cz_type', 'cz_subject', 'cz_start', 'cz_end', 'cz_file', 'cz_period', 'cz_point', 'cp_method', 'cp_target', 'cp_price', 'cp_type', 'cp_trunc', 'cp_minimum', 'cp_maximum', 'cz_download', 'cz_datetime'];

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
    protected $dates = ['cz_start', 'cz_end', 'cz_datetime'];
    
    public function g5ShopCoupons()
    {
        return $this->hasMany(G5ShopCoupon::class, 'cz_id', 'cz_id');
    }
}
