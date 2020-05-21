<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Maxsulot;

/**
 * MaxsulotSearch represents the model behind the search form about `app\models\Maxsulot`.
 */
class MaxsulotSearch extends Maxsulot
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['maxsulot_name', 'maxsulot_photo', 'maxsulot_short', 'maxsulot_add', 'maxsulot_update'], 'safe'],
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
        $query = Maxsulot::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'maxsulot_name', $this->maxsulot_name])
            ->andFilterWhere(['like', 'maxsulot_photo', $this->maxsulot_photo])
            ->andFilterWhere(['like', 'maxsulot_short', $this->maxsulot_short])
            ->andFilterWhere(['like', 'maxsulot_add', $this->maxsulot_add])
            ->andFilterWhere(['like', 'maxsulot_update', $this->maxsulot_update]);

        return $dataProvider;
    }
}
