<?php

namespace SilNex\GuLa\Models\Young;

use Illuminate\Database\Eloquent\Model;

class G5ShopBanner extends Model
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
    protected $table = 'g5_shop_banner';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['bn_id', 'bn_alt', 'bn_url', 'bn_device', 'bn_position', 'bn_border', 'bn_new_win', 'bn_begin_time', 'bn_end_time', 'bn_time', 'bn_hit', 'bn_order'];

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
    protected $dates = ['bn_begin_time', 'bn_end_time', 'bn_time'];

}
