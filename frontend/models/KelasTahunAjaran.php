<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_kelas_tahun_ajaran}}".
 *
 * @property integer $id
 * @property integer $id_tahun_ajaran
 * @property integer $id_kelas
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class KelasTahunAjaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_kelas_tahun_ajaran}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_tahun_ajaran', 'id_kelas', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['id', 'id_tahun_ajaran', 'id_kelas', 'created_by', 'updated_by'], 'integer'],
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
            'id_tahun_ajaran' => Yii::t('app', 'Id Tahun Ajaran'),
            'id_kelas' => Yii::t('app', 'Id Kelas'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
