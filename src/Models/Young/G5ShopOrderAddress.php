<?php

namespace SilNex\GuLa\Models\Young;

use Illuminate\Database\Eloquent\Model;

class G5ShopOrderAddress extends Model  
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
    protected $table = 'g5_shop_order_address';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['ad_id', 'mb_id', 'ad_subject', 'ad_default', 'ad_name', 'ad_tel', 'ad_hp', 'ad_zip1', 'ad_zip2', 'ad_addr1', 'ad_addr2', 'ad_addr3', 'ad_jibeon'];

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
