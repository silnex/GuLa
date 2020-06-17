<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5MemberSocialProfiles extends Model
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
    protected $table = 'g5_member_social_profiles';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['mp_no', 'mb_id', 'provider', 'object_sha', 'identifier', 'profileurl', 'photourl', 'displayname', 'description', 'mp_register_day', 'mp_latest_day'];

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
    protected $dates = ['mp_register_day', 'mp_latest_day'];

}