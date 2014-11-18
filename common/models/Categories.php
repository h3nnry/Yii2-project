<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $category_name
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $create_date_time
 * @property string $update_date_time
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['create_user_id', 'update_user_id'], 'integer'],
            [['create_date_time', 'update_date_time'], 'safe'],
            [['category_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'create_user_id' => 'Create User ID',
            'update_user_id' => 'Update User ID',
            'create_date_time' => 'Create Date Time',
            'update_date_time' => 'Update Date Time',
        ];
    }

    public function beforeSave($insert)
    {
        if ($this->isNewRecord)
        {
            $this->create_user_id = Yii::$app->user->id;
            $this->create_date_time = date("Y-m-d H:i:s");
        }
        else {
            $this->update_user_id = Yii::$app->user->id;
            $this->update_date_time = date("Y-m-d H:i:s");
        }

        return parent::beforeSave($insert);
    }
}
