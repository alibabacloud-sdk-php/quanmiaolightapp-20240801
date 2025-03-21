<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunHotTopicChatShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $generateOptionsShrink;

    /**
     * @example 2024-09-13_12
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string
     */
    public $hotTopicsShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $imageCount;

    /**
     * @var string
     */
    public $messagesShrink;

    /**
     * @example xx
     *
     * @var string
     */
    public $modelCustomPromptTemplate;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5ax
     *
     * @var string
     */
    public $originalSessionId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $stepForBroadcastContentConfigShrink;

    /**
     * @example a3d1c2ac-f086-4a21-9069-f5631542f5a2
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'category' => 'category',
        'generateOptionsShrink' => 'generateOptions',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotTopicsShrink' => 'hotTopics',
        'imageCount' => 'imageCount',
        'messagesShrink' => 'messages',
        'modelCustomPromptTemplate' => 'modelCustomPromptTemplate',
        'modelId' => 'modelId',
        'originalSessionId' => 'originalSessionId',
        'prompt' => 'prompt',
        'stepForBroadcastContentConfigShrink' => 'stepForBroadcastContentConfig',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->generateOptionsShrink) {
            $res['generateOptions'] = $this->generateOptionsShrink;
        }
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->hotTopicsShrink) {
            $res['hotTopics'] = $this->hotTopicsShrink;
        }
        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }
        if (null !== $this->messagesShrink) {
            $res['messages'] = $this->messagesShrink;
        }
        if (null !== $this->modelCustomPromptTemplate) {
            $res['modelCustomPromptTemplate'] = $this->modelCustomPromptTemplate;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->originalSessionId) {
            $res['originalSessionId'] = $this->originalSessionId;
        }
        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }
        if (null !== $this->stepForBroadcastContentConfigShrink) {
            $res['stepForBroadcastContentConfig'] = $this->stepForBroadcastContentConfigShrink;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunHotTopicChatShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['generateOptions'])) {
            $model->generateOptionsShrink = $map['generateOptions'];
        }
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }
        if (isset($map['hotTopics'])) {
            $model->hotTopicsShrink = $map['hotTopics'];
        }
        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }
        if (isset($map['messages'])) {
            $model->messagesShrink = $map['messages'];
        }
        if (isset($map['modelCustomPromptTemplate'])) {
            $model->modelCustomPromptTemplate = $map['modelCustomPromptTemplate'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['originalSessionId'])) {
            $model->originalSessionId = $map['originalSessionId'];
        }
        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }
        if (isset($map['stepForBroadcastContentConfig'])) {
            $model->stepForBroadcastContentConfigShrink = $map['stepForBroadcastContentConfig'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
