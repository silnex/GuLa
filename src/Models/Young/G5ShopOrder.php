<?php

namespace SilNex\GuLa\Models\Young;

use SilNex\GuLa\G5Model;

class G5ShopOrder extends G5Model
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
    protected $table = 'g5_shop_order';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['od_id', 'mb_id', 'od_name', 'od_email', 'od_tel', 'od_hp', 'od_zip1', 'od_zip2', 'od_addr1', 'od_addr2', 'od_addr3', 'od_addr_jibeon', 'od_deposit_name', 'od_b_name', 'od_b_tel', 'od_b_hp', 'od_b_zip1', 'od_b_zip2', 'od_b_addr1', 'od_b_addr2', 'od_b_addr3', 'od_b_addr_jibeon', 'od_memo', 'od_cart_count', 'od_cart_price', 'od_cart_coupon', 'od_send_cost', 'od_send_cost2', 'od_send_coupon', 'od_receipt_price', 'od_cancel_price', 'od_receipt_point', 'od_refund_price', 'od_bank_account', 'od_receipt_time', 'od_coupon', 'od_misu', 'od_shop_memo', 'od_mod_history', 'od_status', 'od_hope_date', 'od_settle_case', 'od_test', 'od_mobile', 'od_pg', 'od_tno', 'od_app_no', 'od_escrow', 'od_casseqno', 'od_tax_flag', 'od_tax_mny', 'od_vat_mny', 'od_free_mny', 'od_delivery_company', 'od_invoice', 'od_invoice_time', 'od_cash', 'od_cash_no', 'od_cash_info', 'od_time', 'od_pwd', 'od_ip'];

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
    protected $dates = ['od_receipt_time', 'od_hope_date', 'od_invoice_time', 'od_time'];

}
