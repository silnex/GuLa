<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5Config extends G5Model
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
    protected $table = 'g5_config';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['cf_title', 'cf_theme', 'cf_admin', 'cf_admin_email', 'cf_admin_email_name', 'cf_add_script', 'cf_use_point', 'cf_point_term', 'cf_use_copy_log', 'cf_use_email_certify', 'cf_login_point', 'cf_cut_name', 'cf_nick_modify', 'cf_new_skin', 'cf_new_rows', 'cf_search_skin', 'cf_connect_skin', 'cf_faq_skin', 'cf_read_point', 'cf_write_point', 'cf_comment_point', 'cf_download_point', 'cf_write_pages', 'cf_mobile_pages', 'cf_link_target', 'cf_bbs_rewrite', 'cf_delay_sec', 'cf_filter', 'cf_possible_ip', 'cf_intercept_ip', 'cf_analytics', 'cf_add_meta', 'cf_member_skin', 'cf_use_homepage', 'cf_req_homepage', 'cf_use_tel', 'cf_req_tel', 'cf_use_hp', 'cf_req_hp', 'cf_use_addr', 'cf_req_addr', 'cf_use_signature', 'cf_req_signature', 'cf_use_profile', 'cf_req_profile', 'cf_register_level', 'cf_register_point', 'cf_icon_level', 'cf_use_recommend', 'cf_recommend_point', 'cf_leave_day', 'cf_search_part', 'cf_email_use', 'cf_email_wr_super_admin', 'cf_email_wr_group_admin', 'cf_email_wr_board_admin', 'cf_email_wr_write', 'cf_email_wr_comment_all', 'cf_email_mb_super_admin', 'cf_email_mb_member', 'cf_email_po_super_admin', 'cf_prohibit_id', 'cf_prohibit_email', 'cf_new_del', 'cf_memo_del', 'cf_visit_del', 'cf_popular_del', 'cf_optimize_date', 'cf_use_member_icon', 'cf_member_icon_size', 'cf_member_icon_width', 'cf_member_icon_height', 'cf_member_img_size', 'cf_member_img_width', 'cf_member_img_height', 'cf_login_minutes', 'cf_image_extension', 'cf_flash_extension', 'cf_movie_extension', 'cf_formmail_is_member', 'cf_page_rows', 'cf_mobile_page_rows', 'cf_visit', 'cf_max_po_id', 'cf_stipulation', 'cf_privacy', 'cf_open_modify', 'cf_memo_send_point', 'cf_mobile_new_skin', 'cf_mobile_search_skin', 'cf_mobile_connect_skin', 'cf_mobile_faq_skin', 'cf_mobile_member_skin', 'cf_captcha_mp3', 'cf_editor', 'cf_cert_use', 'cf_cert_ipin', 'cf_cert_hp', 'cf_cert_kcb_cd', 'cf_cert_kcp_cd', 'cf_lg_mid', 'cf_lg_mert_key', 'cf_cert_limit', 'cf_cert_req', 'cf_sms_use', 'cf_sms_type', 'cf_icode_id', 'cf_icode_pw', 'cf_icode_server_ip', 'cf_icode_server_port', 'cf_googl_shorturl_apikey', 'cf_social_login_use', 'cf_social_servicelist', 'cf_payco_clientid', 'cf_payco_secret', 'cf_facebook_appid', 'cf_facebook_secret', 'cf_twitter_key', 'cf_twitter_secret', 'cf_google_clientid', 'cf_google_secret', 'cf_naver_clientid', 'cf_naver_secret', 'cf_kakao_rest_key', 'cf_kakao_client_secret', 'cf_kakao_js_apikey', 'cf_captcha', 'cf_recaptcha_site_key', 'cf_recaptcha_secret_key', 'cf_1_subj', 'cf_2_subj', 'cf_3_subj', 'cf_4_subj', 'cf_5_subj', 'cf_6_subj', 'cf_7_subj', 'cf_8_subj', 'cf_9_subj', 'cf_10_subj', 'cf_1', 'cf_2', 'cf_3', 'cf_4', 'cf_5', 'cf_6', 'cf_7', 'cf_8', 'cf_9', 'cf_10'];

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
    protected $dates = ['cf_optimize_date'];

}
