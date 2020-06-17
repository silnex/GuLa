<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5Member extends Model  
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
    protected $table = 'g5_member';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['mb_no', 'mb_id', 'mb_password', 'mb_name', 'mb_nick', 'mb_nick_date', 'mb_email', 'mb_homepage', 'mb_level', 'mb_sex', 'mb_birth', 'mb_tel', 'mb_hp', 'mb_certify', 'mb_adult', 'mb_dupinfo', 'mb_zip1', 'mb_zip2', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon', 'mb_signature', 'mb_recommend', 'mb_point', 'mb_today_login', 'mb_login_ip', 'mb_datetime', 'mb_ip', 'mb_leave_date', 'mb_intercept_date', 'mb_email_certify', 'mb_email_certify2', 'mb_memo', 'mb_lost_certify', 'mb_mailling', 'mb_sms', 'mb_open', 'mb_open_date', 'mb_profile', 'mb_memo_call', 'mb_memo_cnt', 'mb_scrap_cnt', 'mb_1', 'mb_2', 'mb_3', 'mb_4', 'mb_5', 'mb_6', 'mb_7', 'mb_8', 'mb_9', 'mb_10'];

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
    protected $dates = ['mb_nick_date', 'mb_today_login', 'mb_datetime', 'mb_email_certify', 'mb_open_date'];

}
