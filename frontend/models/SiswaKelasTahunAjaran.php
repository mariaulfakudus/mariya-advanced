<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_siswa_kelas_tahun_ajaran}}".
 *
 * @property integer $id
 * @property integer $id_data_induk_siswa
 * @property integer $id_kelas_tahun_ajaran
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class SiswaKelasTahunAjaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_siswa_kelas_tahun_ajaran}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_data_induk_siswa', 'id_kelas_tahun_ajaran', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['id', 'id_data_induk_siswa', 'id_kelas_tahun_ajaran', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_data_induk_siswa' => Yii::t('app', 'Id Data Induk Siswa'),
            'id_kelas_tahun_ajaran' => Yii::t('app', 'Id Kelas Tahun Ajaran'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
