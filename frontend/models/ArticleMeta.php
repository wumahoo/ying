<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "article_meta".
 *
 * @property string $id
 * @property string $article_id
 * @property string $content
 * @property integer $read_point
 * @property integer $groupids_view
 * @property string $template
 * @property string $like_id
 * @property integer $allow_comment
 * @property string $copy_from
 * @property integer $hits
 */
class ArticleMeta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_meta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'content', 'template'], 'required'],
            [['article_id', 'read_point', 'groupids_view', 'like_id', 'allow_comment', 'hits'], 'integer'],
            [['content'], 'string'],
            [['template'], 'string', 'max' => 30],
            [['copy_from'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'article_id'    => 'Article ID',
            'content'       => 'Content',
            'read_point'    => 'Read Point',
            'groupids_view' => 'Groupids View',
            'template'      => 'Template',
            'like_id'       => 'Like ID',
            'allow_comment' => 'Allow Comment',
            'copy_from'     => 'Copy From',
            'hits'          => 'Hits',
        ];
    }
}
