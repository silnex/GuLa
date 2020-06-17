<?php

namespace SilNex\GuLa\Models\Young;

use Illuminate\Database\Eloquent\Model;

class G5ShopCategory extends Model
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
    protected $table = 'g5_shop_category';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['ca_id', 'ca_name', 'ca_order', 'ca_skin_dir', 'ca_mobile_skin_dir', 'ca_skin', 'ca_mobile_skin', 'ca_img_width', 'ca_img_height', 'ca_mobile_img_width', 'ca_mobile_img_height', 'ca_sell_email', 'ca_use', 'ca_stock_qty', 'ca_explan_html', 'ca_head_html', 'ca_tail_html', 'ca_mobile_head_html', 'ca_mobile_tail_html', 'ca_list_mod', 'ca_list_row', 'ca_mobile_list_mod', 'ca_mobile_list_row', 'ca_include_head', 'ca_include_tail', 'ca_mb_id', 'ca_cert_use', 'ca_adult_use', 'ca_nocoupon', 'ca_1_subj', 'ca_2_subj', 'ca_3_subj', 'ca_4_subj', 'ca_5_subj', 'ca_6_subj', 'ca_7_subj', 'ca_8_subj', 'ca_9_subj', 'ca_10_subj', 'ca_1', 'ca_2', 'ca_3', 'ca_4', 'ca_5', 'ca_6', 'ca_7', 'ca_8', 'ca_9', 'ca_10'];

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
