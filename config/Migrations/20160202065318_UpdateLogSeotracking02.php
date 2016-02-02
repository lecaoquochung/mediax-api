<?php
use Migrations\AbstractMigration;

class UpdateLogSeotracking02 extends AbstractMigration
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

	$table->addColumn('seotracking_category_id', 'integer', array('after' => 'keyword_id'))
		->update();
    }
}
