<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Xuser;

/**
 * XuserSearch represents the model behind the search form of `app\models\Xuser`.
 */
class XuserSearch extends Xuser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'buy', 'wopen', 'wstart', 'wclose', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'hash', 'activity'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Xuser::find();

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
            'buy' => $this->buy,
            'wopen' => $this->wopen,
            'wstart' => $this->wstart,
            'wclose' => $this->wclose,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'hash', $this->hash])
            ->andFilterWhere(['like', 'activity', $this->activity]);

        return $dataProvider;
    }
}
