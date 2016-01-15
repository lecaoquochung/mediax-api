<?php
use Migrations\AbstractMigration;

class UpdateSeotracking extends AbstractMigration
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
    	$table = $this->table('seotrackings');
		
		// add column seotracking_category_id
		$table->addColumn('seotracking_category_id', 'integer', array('after' => 'keyword_id'))
              ->update();
    }
}
