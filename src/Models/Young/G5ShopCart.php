<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopCart extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;
    use \SilNex\GuLa\Traits\BelongToG5ShopItem;
    use \SilNex\GuLa\Traits\BelongToG5ShopOrder;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_shop_cart';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['ct_id', 'od_id', 'mb_id', 'it_id', 'it_name', 'it_sc_type', 'it_sc_method', 'it_sc_price', 'it_sc_minimum', 'it_sc_qty', 'ct_status', 'ct_history', 'ct_price', 'ct_point', 'cp_price', 'ct_point_use', 'ct_stock_use', 'ct_option', 'ct_qty', 'ct_notax', 'io_id', 'io_type', 'io_price', 'ct_time', 'ct_ip', 'ct_send_cost', 'ct_direct', 'ct_select', 'ct_select_time'];

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
    protected $dates = ['ct_time', 'ct_select_time'];
}
