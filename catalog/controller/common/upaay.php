<?php
class ControllerCommonUpaay extends Controller
{
	public function index()
	{
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}
	//banner-top
	$this->load->model('design/banner');
	$this->load->model('tool/image');

	$data['banners'] = array();

	$results = $this->model_design_banner->getBanner(18);

	foreach ($results as $result) {
		if (is_file(DIR_IMAGE . $result['image'])) {
			$data['banners'][] = array(
				'title' => $result['title'],
				'link'  => $result['link'],
				'image' => $this->model_tool_image->resize($result['image'], '1920', '720')
			);
		}
	}
// mobile

	$data['banners'] = array();

	$results = $this->model_design_banner->getBanner(18);

	foreach ($results as $result) {
		if (is_file(DIR_IMAGE . $result['image'])) {
			$data['banners'][] = array(
				'title' => $result['title'],
				'link'  => $result['link'],
				'image' => $this->model_tool_image->resize($result['image'], '1920', '720')
			);
		}
	}


		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/upaay_d', $data));
	}
}
