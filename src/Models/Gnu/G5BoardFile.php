<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5BoardFile extends G5Model
{
    use \SilNex\GuLa\Traits\BelongToG5Board;

    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_board_file';

    /**
     * PRIMARY KEY 설정
     * 
     * @var string
     */
    protected $primaryKey = ['bo_table', 'wr_id', 'bf_no'];

    /**
     * int가 아니기에 incrementing를 꺼야한다.
     * 
     * @var string
     */
    public $incrementing = false;

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['bo_table', 'wr_id', 'bf_no', 'bf_source', 'bf_file', 'bf_download', 'bf_content', 'bf_fileurl', 'bf_thumburl', 'bf_storage', 'bf_filesize', 'bf_width', 'bf_height', 'bf_type', 'bf_datetime'];

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
    protected $dates = ['bf_datetime'];
}
