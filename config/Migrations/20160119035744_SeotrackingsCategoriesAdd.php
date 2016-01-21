<?php
use Migrations\AbstractMigration;

class SeotrackingsCategoriesAdd extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
    	// inserting multiple rows
        $rows = [
            [
              'id'    => 1,
              'name'  => '外部',
              'parent' => NULL,
              'created' => NULL,
              'modified' => NULL
            ],
            [
              'id'    => 2,
              'name'  => '内部',
              'parent' => NULL,
              'created' => NULL,
              'modified' => NULL
            ],
            [
              'id'    => 3,
              'name'  => 'リンク追加',
              'parent' => 1,
              'created' => NULL,
              'modified' => NULL
            ],
            [
              'id'    => 4,
              'name'  => 'リンク削除',
              'parent' => 1,
              'created' => NULL,
              'modified' => NULL
            ],
            [
              'id'    => 5,
              'name'  => 'タイトル',
              'parent' => 2,
              'created' => NULL,
              'modified' => NULL
            ],
            [
              'id'    => 6,
              'name'  => 'ディククリプション',
              'parent' => 2,
              'created' => NULL,
              'modified' => NULL
            ]
        ];

        // insert to table
        $table = $this->table('seotracking_categories');
		$table->insert($rows);
        $table->saveData();
    }
}
