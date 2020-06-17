<?php

namespace SilNex\GuLa\Models\Gnu;

use Illuminate\Database\Eloquent\Model;

class G5BoardFile extends Model
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
    protected $table = 'g5_board_file';

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
