<?php
use Migrations\AbstractMigration;

class UpdateLogSeotracking01 extends AbstractMigration
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
	$table = $this->table('log_seotrackings');
	$table->addColumn('keyword_id', 'integer', array('after' => 'id'))
		->update();
    }
}
