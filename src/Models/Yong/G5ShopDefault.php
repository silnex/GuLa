<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5ShopDefault extends Model  
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
    protected $table = 'g5_shop_default';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['de_admin_company_owner', 'de_admin_company_name', 'de_admin_company_saupja_no', 'de_admin_company_tel', 'de_admin_company_fax', 'de_admin_tongsin_no', 'de_admin_company_zip', 'de_admin_company_addr', 'de_admin_info_name', 'de_admin_info_email', 'de_shop_skin', 'de_shop_mobile_skin', 'de_type1_list_use', 'de_type1_list_skin', 'de_type1_list_mod', 'de_type1_list_row', 'de_type1_img_width', 'de_type1_img_height', 'de_type2_list_use', 'de_type2_list_skin', 'de_type2_list_mod', 'de_type2_list_row', 'de_type2_img_width', 'de_type2_img_height', 'de_type3_list_use', 'de_type3_list_skin', 'de_type3_list_mod', 'de_type3_list_row', 'de_type3_img_width', 'de_type3_img_height', 'de_type4_list_use', 'de_type4_list_skin', 'de_type4_list_mod', 'de_type4_list_row', 'de_type4_img_width', 'de_type4_img_height', 'de_type5_list_use', 'de_type5_list_skin', 'de_type5_list_mod', 'de_type5_list_row', 'de_type5_img_width', 'de_type5_img_height', 'de_mobile_type1_list_use', 'de_mobile_type1_list_skin', 'de_mobile_type1_list_mod', 'de_mobile_type1_list_row', 'de_mobile_type1_img_width', 'de_mobile_type1_img_height', 'de_mobile_type2_list_use', 'de_mobile_type2_list_skin', 'de_mobile_type2_list_mod', 'de_mobile_type2_list_row', 'de_mobile_type2_img_width', 'de_mobile_type2_img_height', 'de_mobile_type3_list_use', 'de_mobile_type3_list_skin', 'de_mobile_type3_list_mod', 'de_mobile_type3_list_row', 'de_mobile_type3_img_width', 'de_mobile_type3_img_height', 'de_mobile_type4_list_use', 'de_mobile_type4_list_skin', 'de_mobile_type4_list_mod', 'de_mobile_type4_list_row', 'de_mobile_type4_img_width', 'de_mobile_type4_img_height', 'de_mobile_type5_list_use', 'de_mobile_type5_list_skin', 'de_mobile_type5_list_mod', 'de_mobile_type5_list_row', 'de_mobile_type5_img_width', 'de_mobile_type5_img_height', 'de_rel_list_use', 'de_rel_list_skin', 'de_rel_list_mod', 'de_rel_img_width', 'de_rel_img_height', 'de_mobile_rel_list_use', 'de_mobile_rel_list_skin', 'de_mobile_rel_list_mod', 'de_mobile_rel_img_width', 'de_mobile_rel_img_height', 'de_search_list_skin', 'de_search_list_mod', 'de_search_list_row', 'de_search_img_width', 'de_search_img_height', 'de_mobile_search_list_skin', 'de_mobile_search_list_mod', 'de_mobile_search_list_row', 'de_mobile_search_img_width', 'de_mobile_search_img_height', 'de_listtype_list_skin', 'de_listtype_list_mod', 'de_listtype_list_row', 'de_listtype_img_width', 'de_listtype_img_height', 'de_mobile_listtype_list_skin', 'de_mobile_listtype_list_mod', 'de_mobile_listtype_list_row', 'de_mobile_listtype_img_width', 'de_mobile_listtype_img_height', 'de_bank_use', 'de_bank_account', 'de_card_test', 'de_card_use', 'de_card_noint_use', 'de_card_point', 'de_settle_min_point', 'de_settle_max_point', 'de_settle_point_unit', 'de_level_sell', 'de_delivery_company', 'de_send_cost_case', 'de_send_cost_limit', 'de_send_cost_list', 'de_hope_date_use', 'de_hope_date_after', 'de_baesong_content', 'de_change_content', 'de_point_days', 'de_simg_width', 'de_simg_height', 'de_mimg_width', 'de_mimg_height', 'de_sms_cont1', 'de_sms_cont2', 'de_sms_cont3', 'de_sms_cont4', 'de_sms_cont5', 'de_sms_use1', 'de_sms_use2', 'de_sms_use3', 'de_sms_use4', 'de_sms_use5', 'de_sms_hp', 'de_pg_service', 'de_kcp_mid', 'de_kcp_site_key', 'de_inicis_mid', 'de_inicis_admin_key', 'de_inicis_sign_key', 'de_iche_use', 'de_easy_pay_use', 'de_samsung_pay_use', 'de_inicis_lpay_use', 'de_inicis_kakaopay_use', 'de_inicis_cartpoint_use', 'de_item_use_use', 'de_item_use_write', 'de_code_dup_use', 'de_cart_keep_term', 'de_guest_cart_use', 'de_admin_buga_no', 'de_vbank_use', 'de_taxsave_use', 'de_taxsave_types', 'de_guest_privacy', 'de_hp_use', 'de_escrow_use', 'de_tax_flag_use', 'de_kakaopay_mid', 'de_kakaopay_key', 'de_kakaopay_enckey', 'de_kakaopay_hashkey', 'de_kakaopay_cancelpwd', 'de_naverpay_mid', 'de_naverpay_cert_key', 'de_naverpay_button_key', 'de_naverpay_test', 'de_naverpay_mb_id', 'de_naverpay_sendcost', 'de_member_reg_coupon_use', 'de_member_reg_coupon_term', 'de_member_reg_coupon_price', 'de_member_reg_coupon_minimum'];

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
