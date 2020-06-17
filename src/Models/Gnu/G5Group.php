<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5Group extends Model  
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
    protected $table = 'g5_group';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['gr_id', 'gr_subject', 'gr_device', 'gr_admin', 'gr_use_access', 'gr_order', 'gr_1_subj', 'gr_2_subj', 'gr_3_subj', 'gr_4_subj', 'gr_5_subj', 'gr_6_subj', 'gr_7_subj', 'gr_8_subj', 'gr_9_subj', 'gr_10_subj', 'gr_1', 'gr_2', 'gr_3', 'gr_4', 'gr_5', 'gr_6', 'gr_7', 'gr_8', 'gr_9', 'gr_10'];

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
