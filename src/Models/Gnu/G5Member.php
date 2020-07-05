<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Support\Str;
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
use SilNex\GuLa\Traits\BelongToG5Member;

class G5Member extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_member';

    /**
     * PRIMARY KEY 설정
     * 실제 PK는 mb_no이지만 릴레이션이 대부분 mb_id로 이루어져있어
     * mb_id로 설정함
     * 
     * @var string
     */
    protected $primaryKey = 'mb_id';

    /**
     * mb_id로 PK를 설정했기 때문에 incrementing를 꺼야한다.
     * 
     * @var string
     */
    public $incrementing = false;

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
     * Closure 메소드 추가를 위한 property
     * 
     * @var array
     */
    protected $g5WriteRelationalMethods = [];

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

    public function isG5Write($string)
    {
        return substr($string, 0, 7) === 'g5Write';
    }

    public function __get($key)
    {
        if ($this->isG5Write($key)) {
            return $this->$key()->get();
        }
        parent::__get($key);
    }

    public function __call($method, $parameters)
    {
        if ($this->isG5Write($method)) {
            global $silnexGuLaTempTable;
            $class = 'App\\G5Models\\' . Str::studly($method);
            $silnexGuLaTempTable = Str::snake($method);

            if (!class_exists($class)) {
                $anonymousClass = new class extends G5Model
                {
                    use BelongToG5Member;

                    protected $guarded = [];
                    protected $dates = ['wr_datetime'];

                    public function __construct()
                    {
                        global $silnexGuLaTempTable;

                        $this->setTable($silnexGuLaTempTable);
                        parent::__construct();
                    }

                    public function comments()
                    {
                        return $this->hasMany(self::class, 'wr_parent', 'wr_id');
                    }

                    public function parent()
                    {
                        if ($this->wr_is_comment) {
                            return $this->belongsTo(self::class, 'wr_id', 'wr_parent');
                        } else {
                            throw new \Exception("해당 글은 댓글이 아닙니다.");
                        }
                    }
                };
                $class = get_class($anonymousClass);
            }

            $this->g5WriteRelationalMethods[$method] = \Closure::bind(function () use ($class) {
                return $this->hasMany($class, 'mb_id', 'mb_id');
            }, $this, get_class());

            if (is_callable($this->g5WriteRelationalMethods[$method])) {
                return call_user_func_array($this->g5WriteRelationalMethods[$method], $parameters);
            } else {
                throw new \Exception("Dynamic method append error");
            }
        }

        // parent::__call($method, $parameters); not work 
        if (in_array($method, ['increment', 'decrement'])) {
            return $this->$method(...$parameters);
        }

        if ($resolver = (static::$relationResolvers[get_class($this)][$method] ?? null)) {
            return $resolver($this);
        }

        return $this->forwardCallTo($this->newQuery(), $method, $parameters);
    }
}
