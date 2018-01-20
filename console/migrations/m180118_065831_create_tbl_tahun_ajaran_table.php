<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_tahun_ajaran`.
 */
class m180118_065831_create_tbl_tahun_ajaran_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_tahun_ajaran', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50)->notNull(),
            'created_at' => $this->dateTime(),
            'update_at' => $this->dateTime(),
            'created_by' => $this->integer()->notNull()->foreignkey(user),
            'updated_by' => $this->integer()->notNull()->foreignkey(user),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tbl_tahun_ajaran');
    }
}
