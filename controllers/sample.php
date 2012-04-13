<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a sample module for PyroCMS
 *
 * @author 		Jerel Unruh - PyroCMS Dev Team
 * @website		http://unruhdesigns.com
 * @package 	PyroCMS
 * @subpackage 	Sample Module
 */
class Sample extends Public_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Load the required classes
		$this->load->model('sample_m');
		$this->lang->load('sample');
		
		$this->template->append_css('module::sample.css')
						->append_js('module::sample.js');
	}

	/**
	 * All items
	 */
	public function index($offset = 0)
	{
		// set the pagination limit
		$limit = 5;
		
		$data->items = $this->sample_m->limit($limit)
			->offset($offset)
			->get_all();
			
		// we'll do a quick check here so we can tell tags whether there is data or not
		if (count($data->items))
		{
			$data->items_exist = TRUE;
		}
		else
		{
			$data->items_exist = FALSE;
		}

		// we're using the pagination helper to do the pagination for us. Params are: (module/method, total count, limit, uri segment)
		$data->pagination = create_pagination('sample', $this->sample_m->count_all(), $limit, 2);

		$this->template->title($this->module_details['name'], 'the rest of the page title')
						->build('index', $data);
	}
}