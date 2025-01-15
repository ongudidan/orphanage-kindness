<?php

namespace app\modules\cms\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HomePage;

/**
 * HomePageSearch represents the model behind the search form of `app\models\HomePage`.
 */
class HomePageSearch extends HomePage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['main_banner', 'main_banner_title', 'main_banner_Sub_title', 'causes_title', 'causes_sub_title', 'causes_description', 'causes_count', 'events_title', 'events_description', 'events_count', 'help_title', 'help_description', 'video_link', 'contact_title', 'contact_image', 'description', 'target_amount', 'location', 'image', 'created_by', 'updated_by'], 'safe'],
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
        $query = HomePage::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'main_banner', $this->main_banner])
            ->andFilterWhere(['like', 'main_banner_title', $this->main_banner_title])
            ->andFilterWhere(['like', 'main_banner_Sub_title', $this->main_banner_Sub_title])
            ->andFilterWhere(['like', 'causes_title', $this->causes_title])
            ->andFilterWhere(['like', 'causes_sub_title', $this->causes_sub_title])
            ->andFilterWhere(['like', 'causes_description', $this->causes_description])
            ->andFilterWhere(['like', 'causes_count', $this->causes_count])
            ->andFilterWhere(['like', 'events_title', $this->events_title])
            ->andFilterWhere(['like', 'events_description', $this->events_description])
            ->andFilterWhere(['like', 'events_count', $this->events_count])
            ->andFilterWhere(['like', 'help_title', $this->help_title])
            ->andFilterWhere(['like', 'help_description', $this->help_description])
            ->andFilterWhere(['like', 'video_link', $this->video_link])
            ->andFilterWhere(['like', 'contact_title', $this->contact_title])
            ->andFilterWhere(['like', 'contact_image', $this->contact_image])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'target_amount', $this->target_amount])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
