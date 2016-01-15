<?php
use Migrations\AbstractMigration;

class UpdateLogSeotrackings extends AbstractMigration
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
    	
    	// drop column change, detail
    	// $table -> removeColumn('change')
			// ->update();
		// $table -> removeColumn('detail')
			// ->update(); 
    	
    	// add colum title, description
    	// $table->addColumn('title', 'string', array('after' => 'seotracking_id'))
              // ->update();
			  
		// $table->addColumn('description', 'text', array('after' => 'title'))
			// ->update();
			
		// change colum attribute
		$table->changeColumn('seotracking_id', 'integer')
			->save();
    }
}
