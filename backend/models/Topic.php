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
            [['username', 'label', 'image_url', 'image_id', 'video_url', 'video_id', 'input_time', 'update_time', 'content'], 'required'],
            [['like_id', 'comment_id', 'image_id', 'video_id', 'input_time', 'update_time', 'view_count', 'status'], 'integer'],
            [['content'], 'string'],
            [['username'], 'string', 'max' => 20],
            [['label'], 'string', 'max' => 50],
            [['image_url', 'video_url'], 'string', 'max' => 100],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'like_id' => 'Like ID',
            'comment_id' => 'Comment ID',
            'label' => 'Label',
            'image_url' => 'Image Url',
            'image_id' => 'Image ID',
            'video_url' => 'Video Url',
            'video_id' => 'Video ID',
            'input_time' => 'Input Time',
            'update_time' => 'Update Time',
            'content' => 'Content',
            'view_count' => 'View Count',
            'status' => 'Status',
        ];
    }
}
