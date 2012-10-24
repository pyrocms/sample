<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_Sample extends Module {

	public $version = '2.1';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Sample'
			),
			'description' => array(
				'en' => 'This is a PyroCMS module sample.'
			),
			'frontend' => TRUE,
			'backend' => TRUE,
                        'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'Sample',
			'roles' => array(
                                'sample_create', 'sample_read', 'sample_update', 'sample_delete'
                        ), // sample crud roles
			'sections' => array(
				'items' => array(
					'name' 	=> 'sample:items', // These are translated from your language file
					'uri' 	=> 'admin/sample',
						'shortcuts' => array(
							'create' => array(
								'name' 	=> 'sample:create',
								'uri' 	=> 'admin/sample/create',
								'class' => 'add'
								)
							)
						)
				)
		);
	}

	public function install()
	{
		$this->uninstall();
	
		$tables = array(
	            'items' => array(
	                'id' => array(
	                    'type' => 'INT',
	                    'constraint' => '11',
	                    'auto_increment' => TRUE
	                ),
	                'name' => array(
	                    'type' => 'VARCHAR',
	                    'constraint' => '100'
	                ),
	                'slug' => array(
	                    'type' => 'VARCHAR',
	                    'constraint' => '100'
	                )
	            )
	        );
	
	        $sample_settings = array(
	            'sample_setting' => array(
	                'title' => 'Sample Setting',
	                'description' => 'A Yes or No option for the Sample module',
	                '`default`' => '1',
	                '`value`' => '1',
	                'type' => 'select',
	                '`options`' => '1=Yes|0=No',
	                'is_required' => 1,
	                'is_gui' => 1,
	                'module' => 'sample'
	            )
	        );


		if($this->install_tables($tables) AND $this->install_settings($sample_settings) AND
		   is_dir($this->upload_path.'sample') OR @mkdir($this->upload_path.'sample',0777,TRUE))
		{
			return TRUE;
		}
	}

	public function uninstall()
	{
		$this->dbforge->drop_table('sample');
		$this->db->delete('settings', array('module' => 'sample'));
		{
			return TRUE;
		}
	}


	public function upgrade($old_version)
	{
		// Your Upgrade Logic
		return TRUE;
	}

	public function help()
	{
		// Return a string containing help info
		// You could include a file and return it here.
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
	
	private function install_settings($settings) {
	        foreach ($settings as $slug => $setting_info) {
	
	            $setting_info['slug'] = $slug;
	
	            if (!$this->db->insert('settings', $setting_info)) {
	
	                return FALSE;
	            }
	        }
        	return TRUE;
    	}
}
/* End of file details.php */
