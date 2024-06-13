<?php
class ControllerCommonHome extends Controller
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

		$results = $this->model_design_banner->getBanner(9);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1689', '584')
				);
			}
		}

		$data['mob_banners'] = array();

		$results = $this->model_design_banner->getBanner(13);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['mob_banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1140', '628')
				);
			}
		}

		//grid

		$data['grid_banners'] = array();

		$results = $this->model_design_banner->getBanner(14);

		//link one
		$data['gb1_link'] = $results[0]['link'];
		$data['gb1_title'] = $results[0]['title'];
		$data['gb1_image'] = $results[0]['image'];

		$data['gb2_link'] = $results[1]['link'];
		$data['gb2_title'] = $results[1]['title'];
		$data['gb2_image'] = $results[1]['image'];

		$data['gb3_link'] = $results[2]['link'];
		$data['gb3_title'] = $results[2]['title'];
		$data['gb3_image'] = $results[2]['image'];

		$data['gb4_link'] = $results[3]['link'];
		$data['gb4_title'] = $results[3]['title'];
		$data['gb4_image'] = $results[3]['image'];

		$data['gb5_link'] = $results[4]['link'];
		$data['gb5_title'] = $results[4]['title'];
		$data['gb5_image'] = $results[4]['image'];

		// for mobile

		$data['gbmob1_link'] = $results[5]['link'];
		$data['gbmob1_title'] = $results[5]['title'];
		$data['gbmob1_image'] = $results[5]['image'];

		$data['gbmob2_link'] = $results[6]['link'];
		$data['gbmob2_title'] = $results[6]['title'];
		$data['gbmob2_image'] = $results[6]['image'];

		$data['gbmob3_link'] = $results[7]['link'];
		$data['gbmob3_title'] = $results[7]['title'];
		$data['gbmob3_image'] = $results[7]['image'];

		$data['gbmob4_link'] = $results[8]['link'];
		$data['gbmob4_title'] = $results[8]['title'];
		$data['gbmob4_image'] = $results[8]['image'];

		$data['gbmob5_link'] = $results[9]['link'];
		$data['gbmob5_title'] = $results[9]['title'];
		$data['gbmob5_image'] = $results[9]['image'];



		//side banner

		$data['banner_side'] = array();

		$results = $this->model_design_banner->getBanner(10);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banner_side'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '410', '610')
				);
			}
		}
		//banner-midd
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['mid_banners'] = array();

		$results1 = $this->model_design_banner->getBanner(11);

		foreach ($results1 as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['mid_banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1250', '610')
				);
			}
		}


		//side banner

		$data['mid_banner_side'] = array();

		$results2 = $this->model_design_banner->getBanner(12);

		foreach ($results2 as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['mid_banner_side'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '410', '610')
				);
			}
		}

		//side banner

		$data['sale'] = array();

		$results2 = $this->model_design_banner->getBanner(15);

		foreach ($results2 as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['sale'][] = array(
					'title' => $result['title'],

					'image' => 'image/' . $result['image']
				);
			}
		}
		$data['sale'] = $data['sale'][0];

		//shop by room
		$this->load->model('catalog/category');



		$data['room_categories'] = array();

		$room_categories = $this->model_catalog_category->getCategories(67);

		foreach ($room_categories as $category) {

			// Level 2
			$category_info = $this->model_catalog_category->getCategory($category['category_id']);
			if ($category_info) {
				if ($category_info['image']) {
					$image = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
			}
			// Level 1
			$data['room_categories'][] = array(
				'thumb' =>  $image,
				'name'     => $category['name'],

				'column'   => $category['column'] ? $category['column'] : 1,
				'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}


		//shop by style
		$this->load->model('catalog/category');



		$data['style_categories'] = array();

		$style_categories = $this->model_catalog_category->getCategories(60);

		foreach ($style_categories as $category) {

			// Level 2
			$category_info = $this->model_catalog_category->getCategory($category['category_id']);
			if ($category_info) {
				if ($category_info['image']) {
					$image = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
			}
			// Level 1
			$data['style_categories'][] = array(
				'thumb' =>  $image,
				'name'     => $category['name'],

				'column'   => $category['column'] ? $category['column'] : 1,
				'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}

		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');



		$this->load->model('tool/image');

		//sale products

		$filter_data = array(
			'filter_category_id' => '95',
			'start' => '0',
			'limit' => '6'
		);

		$results = $this->model_catalog_product->getProducts($filter_data);

		$coupon = $this->model_catalog_product->getCouponById(7);

		$data['date_end'] = (string) $coupon['date_end'];



		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}
			$sprice = (int)$result['special'];
			$prr = (int)$result['price'];
			$p = (($prr - $sprice) / $prr) * 100;
			$percent = (number_format((float)$p, 0, '.', ''));
			if (!is_null($result['special']) && (float)$result['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$result['special'];
			} else {
				$special = false;
				$tax_price = (float)$result['price'];
			}
			$prsent = (float)$result['price'];
			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'percent'         => $percent,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'path=76' .  '&product_id=' . $result['product_id'])
			);
		}

		//new arrivals
		$filter_data = array(
			'filter_category_id' => '94',
			'start' => '0',
			'limit' => '6'
		);

		$results = $this->model_catalog_product->getProducts($filter_data);


		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}
			$sprice = (int)$result['special'];
			$prr = (int)$result['price'];
			$p = (($prr - $sprice) / $prr) * 100;
			$percent = (number_format((float)$p, 0, '.', ''));
			if (!is_null($result['special']) && (float)$result['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$result['special'];
			} else {
				$special = false;
				$tax_price = (float)$result['price'];
			}
			$prsent = (float)$result['price'];
			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['new_products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'percent'         => $percent,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'path=76' .  '&product_id=' . $result['product_id'])
			);
		}

		//top picks
		$filter_data = array(
			'filter_category_id' => '96',
			'start' => '0',
			'limit' => '6'
		);

		$results = $this->model_catalog_product->getProducts($filter_data);


		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}
			$sprice = (int)$result['special'];
			$prr = (int)$result['price'];
			$p = (($prr - $sprice) / $prr) * 100;
			$percent = (number_format((float)$p, 0, '.', ''));
			if (!is_null($result['special']) && (float)$result['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$result['special'];
			} else {
				$special = false;
				$tax_price = (float)$result['price'];
			}
			$prsent = (float)$result['price'];
			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['top_products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'percent'         => $percent,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'path=76' .  '&product_id=' . $result['product_id'])
			);
		}


		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
