<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m221204_095911_create_pages_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'settings',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string()->notNull(),
                'url' => $this->string()->notNull(),
                'content' => $this->text(),
                'datetime_at' => $this->timestamp()->defaultValue('CURRENT_TIMESTAMP')
            ]
        );
        
        // creates index for column `url`
        $this->createIndex(
            'idx-pages-url',
            'pages',
            'url'
        );
    }

    public function down()
    {
        $this->dropTable('pages');
    }
}
