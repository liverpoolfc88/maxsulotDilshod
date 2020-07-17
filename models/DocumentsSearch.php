<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Documents;

/**
 * DocumentsSearch represents the model behind the search form of `app\models\Documents`.
 */
class DocumentsSearch extends Documents
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'inn_company', 'mfo_bank', 'account_number_company', 'document_number', 'mfo_branch', 'inn_branch', 'account_number_branch', 'code_currency', 'kirim', 'chiqim', 'tip_k_ch', 'contract_number', 'contracts_id', 'currency_id', 'account_number_id', 'bank_branch_id', 'company_id'], 'integer'],
            [['date', 'name_branch', 'purpose_branch', 'contract_date', 'company_name'], 'safe'],
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
        $query = Documents::find();

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
            'inn_company' => $this->inn_company,
            'mfo_bank' => $this->mfo_bank,
            'account_number_company' => $this->account_number_company,
            'date' => $this->date,
            'document_number' => $this->document_number,
            'mfo_branch' => $this->mfo_branch,
            'inn_branch' => $this->inn_branch,
            'account_number_branch' => $this->account_number_branch,
            'code_currency' => $this->code_currency,
            'kirim' => $this->kirim,
            'chiqim' => $this->chiqim,
            'tip_k_ch' => $this->tip_k_ch,
            'contract_date' => $this->contract_date,
            'contract_number' => $this->contract_number,
            'contracts_id' => $this->contracts_id,
            'currency_id' => $this->currency_id,
            'account_number_id' => $this->account_number_id,
            'bank_branch_id' => $this->bank_branch_id,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'name_branch', $this->name_branch])
            ->andFilterWhere(['like', 'purpose_branch', $this->purpose_branch])
            ->andFilterWhere(['like', 'company_name', $this->company_name]);

        return $dataProvider;
    }
}
