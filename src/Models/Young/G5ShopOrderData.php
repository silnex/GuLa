<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopOrderData extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;
    use \SilNex\GuLa\Traits\BelongToG5ShopOrder;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_order_data';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'od_id';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['od_id', 'cart_id', 'mb_id', 'dt_pg', 'dt_data', 'dt_time'];

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
    protected $dates = ['dt_time'];
}
