<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;
use SilNex\GuLa\Models\Young\G5ShopCart;
use SilNex\GuLa\Models\Young\G5ShopCategory;
use SilNex\GuLa\Models\Young\G5ShopCoupon;
use SilNex\GuLa\Models\Young\G5ShopCouponLog;
use SilNex\GuLa\Models\Young\G5ShopItemQa;
use SilNex\GuLa\Models\Young\G5ShopItemUse;
use SilNex\GuLa\Models\Young\G5ShopOrder;
use SilNex\GuLa\Models\Young\G5ShopOrderAddress;
use SilNex\GuLa\Models\Young\G5ShopOrderData;
use SilNex\GuLa\Models\Young\G5ShopOrderDelete;
use SilNex\GuLa\Models\Young\G5ShopOrderPostLog;
use SilNex\GuLa\Models\Young\G5ShopWish;

class G5Member extends G5Model
{
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

    public function g5Auths()
    {
        return $this->hasMany(G5Auth::class, 'mb_id', 'mb_id');
    }

    public function g5Boards()
    {
        return $this->hasMany(G5Board::class, 'bo_admin', 'mb_id');;
    }

    public function g5BoardGoods()
    {
        return $this->hasMany(G5BoardGood::class, 'mb_id', 'mb_id');
    }

    public function g5BoardNews()
    {
        return $this->hasMany(G5BoardNew::class, 'mb_id', 'mb_id');
    }

    public function g5CertHistorys()
    {
        return $this->hasMany(G5CertHistory::class, 'mb_id', 'mb_id');
    }

    public function g5Groups()
    {
        return $this->belongsToMany(G5Group::class, 'g5_group_member', 'mb_id', 'gr_id');
    }

    public function g5Logins()
    {
        return $this->hasMany(G5Login::class, 'mb_id', 'mb_id');
    }

    public function g5MemoReceivers()
    {
        return $this->hasMany(G5Memo::class, 'me_recv_mb_id', 'mb_id');
    }

    public function g5MemoSenders()
    {
        return $this->hasMany(G5Memo::class, 'me_send_mb_id', 'mb_id');
    }

    public function g5Points()
    {
        return $this->hasMany(G5Point::class, 'mb_id', 'mb_id');
    }

    public function g5PollEtcs()
    {
        return $this->hasMany(G5PollEtc::class, 'mb_id', 'mb_id');
    }

    public function g5Scraps()
    {
        return $this->hasMany(G5Scrap::class, 'mb_id', 'mb_id');
    }

    public function g5Autosaves()
    {
        return $this->hasMany(G5Autosave::class, 'mb_id', 'mb_id');
    }

    public function g5QaContents()
    {
        return $this->hasMany(G5QaContent::class, 'mb_id', 'mb_id');
    }

    public function g5MemberSocialProfiles()
    {
        return $this->hasMany(G5MemberSocialProfiles::class, 'mb_id', 'mb_id');
    }

    /**
     * Youngcart relation
     */

    public function g5ShopCarts()
    {
        return $this->hasMany(G5ShopCart::class, 'mb_id', 'mb_id');
    }

    public function g5ShopCategorys()
    {
        return $this->hasMany(G5ShopCategory::class, 'ca_mb_id', 'mb_id');
    }

    public function g5ShopCoupons()
    {
        return $this->hasMany(G5ShopCoupon::class, 'mb_id', 'mb_id');
    }

    public function g5ShopCouponLogs()
    {
        return $this->hasMany(G5ShopCouponLog::class, 'mb_id', 'mb_id');
    }

    public function g5ShopItemUses()
    {
        return $this->hasMany(G5ShopItemUse::class, 'mb_id', 'mb_id');
    }

    public function g5ShopItemQas()
    {
        return $this->hasMany(G5ShopItemQa::class, 'mb_id', 'mb_id');
    }

    public function g5ShopOrders()
    {
        return $this->hasMany(G5ShopOrder::class, 'mb_id', 'mb_id');
    }

    public function g5ShopOrderAddress()
    {
        return $this->hasMany(G5ShopOrderAddress::class, 'mb_id', 'mb_id');
    }

    public function g5ShopOrderDatas()
    {
        return $this->hasMany(G5ShopOrderData::class, 'mb_id', 'mb_id');
    }

    public function g5ShopOrderDeletes()
    {
        return $this->hasMany(G5ShopOrderDelete::class, 'mb_id', 'mb_id');
    }

    public function g5ShopWishs()
    {
        return $this->hasMany(G5ShopWish::class, 'mb_id', 'mb_id');
    }

    public function g5ShopOrderPostLogs()
    {
        return $this->hasMany(G5ShopOrderPostLog::class, 'mb_id', 'mb_id');
    }
}
