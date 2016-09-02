<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property string $id
 * @property string $username
 * @property integer $like_id
 * @property integer $comment_id
 * @property string $label
 * @property string $image_url
 * @property string $image_id
 * @property string $video_url
 * @property string $video_id
 * @property integer $input_time
 * @property integer $update_time
 * @property string $content
 * @property integer $view_count
 * @property integer $status
 */
class Topic extends \yii\db\ActiveRecord
{

    //public $model;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['content', 'required','message'=>'话题内容不能为空'],
            [['like_id', 'comment_id', 'image_id', 'video_id', 'input_time', 'update_time', 'view_count', 'status'], 'integer'],
            [['content'], 'string'],
            [['username'], 'string', 'max' => 20,'message' => '用户名不能超过20字符'],
            [['label'], 'string', 'max' => 50,'message' => '标签不能超过50个字符'],
            [['image_url', 'video_url'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'like_id' => 'Like ID',
            'comment_id' => 'Comment ID',
            'label' => '标签',
            'image_url' => 'Image Url',
            'image_id' => 'Image ID',
            'video_url' => 'Video Url',
            'video_id' => 'Video ID',
            'input_time' => '发表时间',
            'update_time' => '更新时间',
            'content' => '话题内容',
            'view_count' => '阅读次数',
            'status' => '话题状态',
        ];
    }
}
