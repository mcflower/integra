<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ZhktAnketa;

/**
 * ZhktSearch represents the model behind the search form of `app\models\ZhktAnketa`.
 */
class ZhktSearch extends ZhktAnketa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'age', 'created_at', 'updated_at'], 'integer'],
            [['name', 'phone', 'email', 'address', 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'q1', 'q2', 'q3', 'q4', 'recomended', 'doctor_email'], 'safe'],
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
        $query = ZhktAnketa::find();

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
            'age' => $this->age,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'r1', $this->r1])
            ->andFilterWhere(['like', 'r2', $this->r2])
            ->andFilterWhere(['like', 'r3', $this->r3])
            ->andFilterWhere(['like', 'r4', $this->r4])
            ->andFilterWhere(['like', 'r5', $this->r5])
            ->andFilterWhere(['like', 'r6', $this->r6])
            ->andFilterWhere(['like', 'r7', $this->r7])
            ->andFilterWhere(['like', 'r8', $this->r8])
            ->andFilterWhere(['like', 'r9', $this->r9])
            ->andFilterWhere(['like', 'r10', $this->r10])
            ->andFilterWhere(['like', 'r11', $this->r11])
            ->andFilterWhere(['like', 'r12', $this->r12])
            ->andFilterWhere(['like', 'r13', $this->r13])
            ->andFilterWhere(['like', 'r14', $this->r14])
            ->andFilterWhere(['like', 'r15', $this->r15])
            ->andFilterWhere(['like', 'r16', $this->r16])
            ->andFilterWhere(['like', 'q1', $this->q1])
            ->andFilterWhere(['like', 'q2', $this->q2])
            ->andFilterWhere(['like', 'q3', $this->q3])
            ->andFilterWhere(['like', 'q4', $this->q4])
            ->andFilterWhere(['like', 'recomended', $this->recomended])
            ->andFilterWhere(['like', 'doctor_email', $this->doctor_email]);

        return $dataProvider;
    }
}
