<?php
use Migrations\AbstractMigration;

class UpdateSeotrackings extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
    	$table = $this->table('seotrackings');
		
		// drop column type
		$table->removeColumn('type')
			->update();
			
		// rename column name to title
		$table->renameColumn('name', 'title');
		
		// add column description
		$table->addColumn('description', 'text', array('after' => 'title'))
              ->update();
    }
}
