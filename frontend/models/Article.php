<?php
namespace frontend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property integer $cate_id
 * @property integer $type_id
 * @property string $title
 * @property string $style
 * @property string $keywords
 * @property string $labels
 * @property string $description
 * @property string $url
 * @property integer $list_order
 * @property integer $status
 * @property integer $sysadd
 * @property integer $is_link
 * @property string $username
 * @property string $update_time
 * @property string $input_time
 * @property string $multimedia_url
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'type_id', 'list_order', 'status', 'sysadd', 'is_link', 'update_time', 'input_time'], 'integer'],
            [['type_id', 'style', 'keywords', 'description', 'url', 'username'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 80],
            [['style'], 'string', 'max' => 24],
            [['keywords'], 'string', 'max' => 40],
            [['labels', 'url'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'             => 'ID',
            'cate_id'        => 'Cate ID',
            'type_id'        => 'Type ID',
            'title'          => 'Title',
            'style'          => 'Style',
            'keywords'       => 'Keywords',
            'labels'         => 'Labels',
            'description'    => 'Description',
            'url'            => 'Url',
            'list_order'     => 'List Order',
            'status'         => 'Status',
            'sysadd'         => 'Sysadd',
            'is_link'        => 'Is Link',
            'username'       => 'Username',
            'update_time'    => 'Update Time',
            'input_time'     => 'Input Time',
            'multimedia_url' => 'Multimedia Url',
        ];
    }


    /**
     * 查找最近更新的所有文章
     * @param int $count 查找的数量
     * @return mixed
     */
    public function listLastArticle($count = 10)
    {
        $art = Article::find()
            ->limit($count)
            ->orderBy('id')
            ->asArray()
            ->all();

        return $art;
    }

    /**
     * 查找最近关注会员的文章
     * @param int $count 查找关注的数量
     */
    public function listFocusLastArticle($count = 10)
    {

    }

}
