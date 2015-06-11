<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Home;

/**
 * HomeSearch represents the model behind the search form about `common\models\Home`.
 */
class HomeSearch extends Home
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home_id', 'price', 'size', 'type', 'bed', 'bath', 'status'], 'integer'],
            [['name', 'address', 'img', 'detail', 'broker'], 'safe'],
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
        $query = Home::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'home_id' => $this->home_id,
            'price' => $this->price,
            'size' => $this->size,
            'type' => $this->type,
            'bed' => $this->bed,
            'bath' => $this->bath,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'broker', $this->broker]);

        return $dataProvider;
    }
}
