<?php

namespace SilNex\GuLa\Models\Young;

use Illuminate\Database\Eloquent\Model;

class G5ShopPersonalpay extends Model  
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
    protected $table = 'g5_shop_personalpay';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['pp_id', 'od_id', 'pp_name', 'pp_email', 'pp_hp', 'pp_content', 'pp_use', 'pp_price', 'pp_pg', 'pp_tno', 'pp_app_no', 'pp_casseqno', 'pp_receipt_price', 'pp_settle_case', 'pp_bank_account', 'pp_deposit_name', 'pp_receipt_time', 'pp_receipt_ip', 'pp_shop_memo', 'pp_cash', 'pp_cash_no', 'pp_cash_info', 'pp_ip', 'pp_time'];

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
    protected $dates = ['pp_receipt_time', 'pp_time'];

}
