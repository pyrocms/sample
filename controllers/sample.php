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
		
		$this->template->append_metadata(css('sample.css', 'sample'))
						->append_metadata(js('sample.js', 'sample'));
	}

	/**
	 * All items
	 */
	public function index($offset = 0)
	{
		// set the pagination limit
		$limit = 5;
		
		// instead of using MY_Models get_all() we use our own get_array()
		// because Tags cannot handle an object
		$this->data->items	= $this->sample_m
			->get_array($limit, $offset);
			
		// we'll do a quick check here so we can tell tags whether there is data or not
		if ( ! $this->data->items) $this->data->empty = TRUE;

		// we're using the pagination helper to do the pagination for us. Params are: (module/method, total count, limit, uri segment)
		$this->data->pagination = create_pagination('sample', $this->sample_m->count_all(), $limit, 2);

		/**
		 * You'll notice that we are setting the "pagination" partial. An alternative is
		 * to do $this->load->view('admin/partials/pagination'); in the view but that
		 * requires php. By setting the partial here and displaying it with
		 * {pyro:template:partial name="pagination"} in index.php we can get rid of php.
		 * The only requirement is that the pagination data is available to the partial
		 * so we set $this->data->pagination in this controller and it gets passed when we build.
		 */
		$this->template->title($this->module_details['name'], 'the rest of the page title')
						->set_partial('pagination', 'admin/partials/pagination')
						->build('index', $this->data);
	}
}