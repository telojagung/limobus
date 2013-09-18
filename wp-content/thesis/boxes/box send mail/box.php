<?php
/*
Name:box send mail
Author: Thanh
Version: 1.0
Description: trang box buffalo limousine service
Class: box_send_mail
*/

class box_send_mail extends thesis_box {
	protected function translate() {
		global $thesis;
                $this->name = __('box send mail', 'os-rev-thesis');
		$this->title = sprintf(__('box send mail', 'os-rev-thesis'));
                
	}

	        
        protected function options() {
	    
		    return array(
				'slidershort' => array(
					'type' => 'text',
					'width' => 'medium',
					'label' => __('Slider Shortcode', 'os-rev-thesis'),
					'tooltip' => sprintf(__('Enter the Slider Shortcode of the Slider you wish to use. Note - The Slider Shortcode can be found in the Revolution Slider Options for the slide plan to use.', 'os-rev-thesis')),
					'default' => ''
					)
			);
		}
		
		
		
	public function html() {    
			echo 'trần thiện thanh';
	} 
}