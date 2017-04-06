<?php

use Phinx\Db\Adapter\MysqlAdapter;
use think\migration\Migrator;

class Post extends Migrator
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
        $this->table('post', ['engine' => 'MyISAM'])
            ->addColumn('title', 'text', ['comment' => '标题'])
            ->addColumn('body', 'text', ['limit' => MysqlAdapter::TEXT_LONG, 'comment' => '内容'])
            ->addColumn('author', 'text', ['comment' => '作者'])
            ->addTimestamps('create_time', 'update_time')
            ->create();
    }
}
