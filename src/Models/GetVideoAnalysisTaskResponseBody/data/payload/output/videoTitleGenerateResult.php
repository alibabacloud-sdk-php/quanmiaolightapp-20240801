<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoTitleGenerateResult\usage;
use AlibabaCloud\Tea\Model;

class videoTitleGenerateResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $text;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'generateFinished' => 'generateFinished',
        'text' => 'text',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoTitleGenerateResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
