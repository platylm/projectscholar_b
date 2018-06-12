<?php

namespace app\modules\scholar_b\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\scholar_b\models\ScbScholarshipType;
use app\modules\scholar_b\components\ModelHelper;
/**
 * ScbScholarshipTypeSearch represents the model behind the search form of `app\modules\scholar_b\models\ScbScholarshipType`.
 */
class ScbScholarshipTypeSearch extends ScbScholarshipType
{
    public function behaviors()
    {
        return ModelHelper::behaviors();
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scholarship_id', 'scholarship_name', 'crtime', 'udtime'], 'safe'],
            [['crby', 'udby'], 'integer'],
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
        $query = ScbScholarshipType::find();

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
            'crby' => $this->crby,
            'crtime' => $this->crtime,
            'udby' => $this->udby,
            'udtime' => $this->udtime,
        ]);

        $query->andFilterWhere(['like', 'scholarship_id', $this->scholarship_id])
            ->andFilterWhere(['like', 'scholarship_name', $this->scholarship_name]);

        return $dataProvider;
    }
}
