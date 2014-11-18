<?php

namespace common;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Categories;

/**
 * CategoriesSearch represents the model behind the search form about `common\models\Categories`.
 */
class CategoriesSearch extends Categories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'create_user_id', 'update_user_id'], 'integer'],
            [['category_name', 'create_date_time', 'update_date_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Categories::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'create_user_id' => $this->create_user_id,
            'update_user_id' => $this->update_user_id,
            'create_date_time' => $this->create_date_time,
            'update_date_time' => $this->update_date_time,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_name]);

        return $dataProvider;
    }
}
