<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5Group extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Member;

    protected $g5MemberForeignKey = 'gr_admin';

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_group';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = 'gr_id';

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

    public function g5Board()
    {
        return $this->hasMany(G5Board::class, 'gr_id', 'gr_id');
    }

    public function g5Members()
    {
        return $this->belongsToMany(G5Member::class, 'g5_group_member', 'gr_id', 'mb_id');
    }
}
