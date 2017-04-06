<?php

use think\migration\Migrator;

class Medal extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->table('medal', ['engine' => 'MyISAM'])
            ->addColumn('department_id', 'integer', ['comment' => '单位id'])
            ->addColumn('game_id', 'integer', ['comment' => '书院id'])
            ->addColumn('athlete', 'text', ['comment' => '运动员姓名'])
            ->addColumn('type', 'string', ['limit' => 20, 'comment' => '奖牌类型'])
            ->addTimestamps('create_time', 'update_time')
            ->addForeignKey('department_id', 'department', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
            ->addForeignKey('game_id', 'game', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
            ->addIndex('type')
            ->create();
    }
}
