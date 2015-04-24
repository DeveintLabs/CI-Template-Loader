<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This CI library allows you to load a view 
 * together with its header and footer in one
 * call.
 * 
 * @author Nelson Ameyo <nelson@blackpay.co.ke>
 * @version 1.0
 * @license GNU General Public License v2.0
 * @link https://github.com/DeveintLabs/CI-Template-Loader
 * 
 * */

class Template
{
  protected 	$ci;

  	# Header and footer location
 	public $header = 'inc/header';
 	public $footer = 'inc/footer';

	public function __construct()
	{
        $this->ci =& get_instance();
	}


	public function load($views='', $data='')
	{
		// load header
		if($this->header)
		{
			$this->ci->load->view($this->header, $data);
			$data = '';
		}

		// Load content, can be more than one view
		if(is_array($views))
		{
			foreach ($views as $view) 
			{
				$this->ci->load->view($view, $data);
				$data = '';
			}
		} else {
			$this->ci->load->view($views, $data);
		}

		// load footer
		if($this->footer)
		{
			$this->ci->load->view($this->footer, $data);
			$data = '';
		}
	}

	

}

/* End of file MY_Template.php */
/* Location: ./application/libraries/MY_Template.php */
