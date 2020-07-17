<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property int $inn_company
 * @property int $mfo_bank
 * @property int $account_number_company
 * @property string $date
 * @property int $document_number
 * @property int $mfo_branch
 * @property int $inn_branch
 * @property string $name_branch
 * @property int $account_number_branch
 * @property string $purpose_branch
 * @property int $code_currency
 * @property int $kirim
 * @property int $chiqim
 * @property int $tip_k_ch
 * @property string $contract_date
 * @property int $contract_number
 * @property int $contracts_id
 * @property int $currency_id
 * @property int $account_number_id
 * @property int $bank_branch_id
 * @property int $company_id
 * @property string $company_name
 */
class Documents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inn_company', 'mfo_bank', 'account_number_company', 'document_number', 'mfo_branch', 'inn_branch', 'account_number_branch', 'code_currency', 'kirim', 'chiqim', 'tip_k_ch', 'contract_number', 'contracts_id', 'currency_id', 'account_number_id', 'bank_branch_id', 'company_id'], 'integer'],
            [['date', 'contract_date'], 'safe'],
            [['name_branch', 'purpose_branch', 'company_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inn_company' => 'Inn Company',
            'mfo_bank' => 'Mfo Bank',
            'account_number_company' => 'Account Number Company',
            'date' => 'Date',
            'document_number' => 'Document Number',
            'mfo_branch' => 'Mfo Branch',
            'inn_branch' => 'Inn Branch',
            'name_branch' => 'Name Branch',
            'account_number_branch' => 'Account Number Branch',
            'purpose_branch' => 'Purpose Branch',
            'code_currency' => 'Code Currency',
            'kirim' => 'Kirim',
            'chiqim' => 'Chiqim',
            'tip_k_ch' => 'Tip K Ch',
            'contract_date' => 'Contract Date',
            'contract_number' => 'Contract Number',
            'contracts_id' => 'Contracts ID',
            'currency_id' => 'Currency ID',
            'account_number_id' => 'Account Number ID',
            'bank_branch_id' => 'Bank Branch ID',
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
        ];
    }
}
