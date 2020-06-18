<?php

namespace SilNex\GuLa\Models\Gnu;

use SilNex\GuLa\G5Model;

class G5QaConfig extends G5Model
{
    /**
     * 그누보드 테이블
     *
     * @var string
     */
    protected $table = 'g5_qa_config';

    /**
     * 할당(수정) 가능한 속성(컬럼)
     *
     * @var array
     */
    protected $fillable = ['qa_title', 'qa_category', 'qa_skin', 'qa_mobile_skin', 'qa_use_email', 'qa_req_email', 'qa_use_hp', 'qa_req_hp', 'qa_use_sms', 'qa_send_number', 'qa_admin_hp', 'qa_admin_email', 'qa_use_editor', 'qa_subject_len', 'qa_mobile_subject_len', 'qa_page_rows', 'qa_mobile_page_rows', 'qa_image_width', 'qa_upload_size', 'qa_insert_content', 'qa_include_head', 'qa_include_tail', 'qa_content_head', 'qa_content_tail', 'qa_mobile_content_head', 'qa_mobile_content_tail', 'qa_1_subj', 'qa_2_subj', 'qa_3_subj', 'qa_4_subj', 'qa_5_subj', 'qa_1', 'qa_2', 'qa_3', 'qa_4', 'qa_5'];

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
