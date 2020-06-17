<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5ShopItem extends Model  
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
    protected $table = 'g5_shop_item';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['it_id', 'ca_id', 'ca_id2', 'ca_id3', 'it_skin', 'it_mobile_skin', 'it_name', 'it_seo_title', 'it_maker', 'it_origin', 'it_brand', 'it_model', 'it_option_subject', 'it_supply_subject', 'it_type1', 'it_type2', 'it_type3', 'it_type4', 'it_type5', 'it_basic', 'it_explan', 'it_explan2', 'it_mobile_explan', 'it_cust_price', 'it_price', 'it_point', 'it_point_type', 'it_supply_point', 'it_notax', 'it_sell_email', 'it_use', 'it_nocoupon', 'it_soldout', 'it_stock_qty', 'it_stock_sms', 'it_noti_qty', 'it_sc_type', 'it_sc_method', 'it_sc_price', 'it_sc_minimum', 'it_sc_qty', 'it_buy_min_qty', 'it_buy_max_qty', 'it_head_html', 'it_tail_html', 'it_mobile_head_html', 'it_mobile_tail_html', 'it_hit', 'it_time', 'it_update_time', 'it_ip', 'it_order', 'it_tel_inq', 'it_info_gubun', 'it_info_value', 'it_sum_qty', 'it_use_cnt', 'it_use_avg', 'it_shop_memo', 'ec_mall_pid', 'it_img1', 'it_img2', 'it_img3', 'it_img4', 'it_img5', 'it_img6', 'it_img7', 'it_img8', 'it_img9', 'it_img10', 'it_1_subj', 'it_2_subj', 'it_3_subj', 'it_4_subj', 'it_5_subj', 'it_6_subj', 'it_7_subj', 'it_8_subj', 'it_9_subj', 'it_10_subj', 'it_1', 'it_2', 'it_3', 'it_4', 'it_5', 'it_6', 'it_7', 'it_8', 'it_9', 'it_10'];

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
    protected $dates = ['it_time', 'it_update_time'];

}
