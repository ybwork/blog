<?php

use yii\db\Migration;

/**
 * Handles the creation of table `themes`.
 * Has foreign keys to the tables:
 *
 * - `authors`
 */
class m170608_163213_create_themes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('themes', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'name' => $this->string()->notNull(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-themes-author_id',
            'themes',
            'author_id'
        );

        // add foreign key for table `authors`
        $this->addForeignKey(
            'fk-themes-author_id',
            'themes',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `authors`
        $this->dropForeignKey(
            'fk-themes-author_id',
            'themes'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-themes-author_id',
            'themes'
        );

        $this->dropTable('themes');
    }
}
