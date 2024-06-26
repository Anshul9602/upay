<?php
class ControllerExtensionModuleDiscountsPack extends Controller {
	private $release_version = '1.5.2.0';
	private $error = array();
	private $discount_modules = array('category');
	
	public function index() {
		$this->load->language('extension/module/discounts_pack');
		
		$this->document->setTitle($this->language->get('heading_title'));
		
		/* Bootstrap Select CDN */
		$this->document->addStyle("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css");
		$this->document->addScript("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js");
		
		/* Bootstrap Toggle CDN */
		$this->document->addScript("https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js");
		$this->document->addStyle("https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css");
		
		$settings = array('status', 'sort_order');
		
		$this->load->model('setting/setting');
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		
		$data['discount_modules'] = $this->discount_modules;
		
		foreach ($this->discount_modules as $i) {
			$key = 'text_' . $i;
			$data[$key] = $this->language->get($key);
		}
		
		if (version_compare($this->config->get('module_discounts_pack_version'),$this->release_version, '<' )) {
			$this->upgrade();
		}
		
		$data['text_category'] = $this->language->get('text_category');
		$data['text_upgrade'] = $this->language->get('text_upgrade');
		$data['text_edit_discounts'] = $this->language->get('text_edit_discounts');
		
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		
		$data['entry_include_specials'] = $this->language->get('entry_include_specials');
		
		$data['entry_override_special_price'] = $this->language->get('entry_override_special_price');
		$data['entry_override_discount_price'] = $this->language->get('entry_override_discount_price');
		$data['entry_rounding'] = $this->language->get('entry_rounding');
		$data['entry_rounding_precision'] = $this->language->get('entry_rounding_precision');
	
		$data['help_override_special_price'] = $this->language->get('help_override_special_price');
		$data['help_override_discount_price'] = $this->language->get('help_override_discount_price');
		$data['help_rounding'] = $this->language->get('help_rounding');
		$data['help_rounding_precision'] = $this->language->get('help_rounding_precision');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_save_stay'] = $this->language->get('button_save_stay');
		$data['button_cancel'] = $this->language->get('button_cancel');
		
		$data['tab_settings'] = $this->language->get('tab_settings');
		$data['tab_about'] = $this->language->get('tab_about');
		
		$data['options_discount'] = array('default', 'override');
		$data['options_special'] = array('default', 'exclusive', 'override');
		$data['options_rounding'] = array('none', 'up', 'down');
		$data['options_rounding_precision'] = array(0,1,2,3);
		
		$data['permission'] = $this->user->hasPermission('modify', 'extension/module/discounts_pack');
		$data['user_token'] = $this->session->data['user_token'];
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		$data['breadcrumbs'] = array();
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);
		
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/discounts_pack', 'user_token=' . $this->session->data['user_token'], true)
		);
		
		$data['action'] = $this->url->link('extension/module/discounts_pack', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		
		if (isset($this->request->post['module_discounts_pack_status'])) {
			$data['discounts_status'] = $this->request->post['module_discounts_pack_status'];
		} else {
			$data['discounts_status'] = $this->config->get('module_discounts_pack_status');
		}
		
		if (isset($this->request->post['module_discounts_pack_include_specials'])) {
			$data['discounts_include_specials'] = $this->request->post['module_discounts_pack_include_specials'];
		} else {
			$data['discounts_include_specials'] = $this->config->get('module_discounts_pack_include_specials');
		}
		
		if (isset($this->request->post['module_discounts_pack_override_special_price'])) {
			$data['discounts_override_special_price'] = $this->request->post['module_discounts_pack_override_special_price'];
		} else {
			$data['discounts_override_special_price'] = $this->config->get('module_discounts_pack_override_special_price');
		}
		
		if (isset($this->request->post['module_discounts_pack_override_discount_price'])) {
			$data['discounts_override_discount_price'] = $this->request->post['module_discounts_pack_override_discount_price'];
		} else {
			$data['discounts_override_discount_price'] = $this->config->get('module_discounts_pack_override_discount_price');
		}
		
		if (isset($this->request->post['module_discounts_pack_rounding'])) {
			$data['discounts_rounding'] = $this->request->post['module_discounts_pack_rounding'];
		} elseif(!empty($this->config->get('module_discounts_pack_rounding'))) {
			$data['discounts_rounding'] = $this->config->get('module_discounts_pack_rounding');
		} else {
			$data['discounts_rounding'] = 'none';
		}
		
		if (isset($this->request->post['module_discounts_pack_rounding_precision'])) {
			$data['discounts_rounding_precision'] = $this->request->post['module_discounts_pack_rounding_precision'];
		} elseif (!empty($this->config->get('module_discounts_pack_rounding_precision'))) {
			$data['discounts_rounding_precision'] = $this->config->get('module_discounts_pack_rounding_precision');
		} else {
			$data['discounts_rounding_precision'] = 0;
		}
		
		$data['settings'] = $settings;
		$data['discount_modules_data'] = array();
		foreach ($this->discount_modules as $i) {
			$key = 'text_' . $i;
			$data['discount_modules_data'][$i]['title'] = $this->language->get($key);
			
			foreach ($settings as $j) {
				$key = 'total_' . $i . '_discount_' . $j;
				
				if (isset($this->request->post[$key])) {
					$data['discount_modules_data'][$i][$j] = $this->request->post[$key];
				} else {
					$data['discount_modules_data'][$i][$j] = $this->config->get($key);
				}
			}
		}
		
		$data['link'] = $this->url->link('extension/module/discounts_pack/discount_%s', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['version'] = $this->release_version;
		$data['year'] = date('Y');
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/module/discounts_pack', $data));
	}
	
	public function saveSettings() {
		
		$json = array();
		
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$this->load->model('setting/setting');
			$this->load->language('extension/module/discounts_pack');

			parse_str(htmlspecialchars_decode($this->request->post['settings']), $settings);
			
			$settings['module_discounts_pack_version'] = $this->release_version;
			
			
			$this->model_setting_setting->editSetting('module_discounts_pack', $settings);
			
			$discount_modules = $this->discount_modules;
			
			foreach ($discount_modules as $i) {
				
				parse_str(htmlspecialchars_decode($this->request->post[$i]), $settings_data);
				$code = 'total_' . $i . '_discount';
				
				$this->model_setting_setting->editSetting($code, $settings_data);
			}
				
			$json['success'] = $this->language->get('text_success');
			//$json['success'] = $settings;

		} else {
			$json['error'] = $this->language->get('error_warning');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		
	}
	
	public function upgrade() {
		
		$current_version = $this->config->get('module_discounts_pack_version');
		if(empty($current_version)) {
			$current_version = '1.4.0.0' ;
		}
		
		if (version_compare($current_version,$this->release_version,'<')) {
		
			// Update User Group Permissions
			$this->load->model('user/user_group');
			$group_id = $this->user->getGroupId();
			$permissions = array('access','modify');
			
			$discount_modules = $this->discount_modules;	
			$routes[] = 'extension/module/discounts_pack';
			
			foreach ($discount_modules as $i) {
				$routes[] = 'extension/module/discounts_pack/discount_' . $i ;
				if (is_file(DIR_APPLICATION . 'controller/extension/module/discount_' . $i . '.php')) {
					unlink(DIR_APPLICATION . 'controller/extension/module/discount_' . $i . '.php');
				}
				
				if (is_file(DIR_APPLICATION . 'controller/extension/module/discounts.php')) {
					unlink(DIR_APPLICATION . 'controller/extension/module/discounts.php');
				}
			}
		
			foreach($permissions as $permission) {
				foreach($routes as $route) {
					$this->model_user_user_group->addPermission($group_id, $permission, $route);
				}
			}
		}
		
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `code` = 'module_discounts_pack' WHERE `code` = 'module_discounts'");
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `key` = 'module_discounts_pack_status' WHERE `key` = 'module_discounts_status'");
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `key` = 'module_discounts_pack_version' WHERE `key` = 'module_discounts_version'");
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `key` = 'module_discounts_pack_include_specials' WHERE `key` = 'module_discounts_include_specials'");
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `key` = 'module_discounts_pack_override_discount_price' WHERE `key` = 'module_discounts_override_discount_price'");
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `key` = 'module_discounts_pack_override_special_price' WHERE `key` = 'module_discounts_override_special_price'");
		
		// Finally, save the new version number
		$this->db->query("UPDATE `". DB_PREFIX ."setting` SET `value` = '" . $this->release_version . "' WHERE `key` = 'module_discounts_pack_version'");
		$this->error['warning'] = 'Discounts Pack extension updated from v' . $current_version .' to v' . $this->release_version ; 
	
	}
	
	public function install() {
		
		// Permissions
		$this->load->model('user/user_group');
		$group_id = $this->user->getGroupId();
		$permissions = array('access','modify');
		
		$routes = array();
		$routes[] = 'extension/module/discounts_pack';
		
		$discount_modules = $this->discount_modules;	
		foreach ($discount_modules as $i) {
			$routes[] = 'extension/module/discounts_pack/discount_' . $i ;
			$routes[] = 'extension/total/' . $i .'_discount'; 
		}
		
		foreach($permissions as $permission) {
			foreach($routes as $route) {
				$this->model_user_user_group->addPermission($group_id, $permission, $route);
			}
		}

		// Enable Discounts
		$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'module_discounts_pack', 'module_discounts_pack_status', '1', '0'); ");
		$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'module_discounts_pack', 'module_discounts_pack_version', '" . $this->release_version . "', '0'); ");
		$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'module_discounts_pack', 'module_discounts_pack_include_specials', '1', '0'); ");
		$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'module_discounts_pack', 'module_discounts_pack_override_discount_price', 'override', '0'); ");
		$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'module_discounts_pack', 'module_discounts_pack_override_special_price', 'exclusive', '0'); ");
		
		foreach($this->discount_modules as $module) {
			$this->load->controller('extension/module/discounts_pack/discount_' . $module . '/install');
		
		}
		
		/*
		// Category Discount  
		if(in_array('category', $this->discount_modules)) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX ."category_discount` (`category_discount_id` int(11) NOT NULL AUTO_INCREMENT, `category_id` int(11) NOT NULL, `customer_group_id` int(11) NOT NULL, `priority` int(5) NOT NULL DEFAULT '1', ";
			$sql .= "`percentage` decimal(15,4) NOT NULL DEFAULT '0.0000', `affect` int(1) NOT NULL DEFAULT '0', `qty` int(1) NOT NULL DEFAULT '0',`status` INT  NOT NULL DEFAULT '1', `date_start` date NOT NULL DEFAULT '0000-00-00', `date_end` date NOT NULL DEFAULT '0000-00-00', PRIMARY KEY (`category_discount_id`), KEY `category_id` (`category_id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		
			$this->db->query($sql);
		
			$this->db->query("INSERT INTO `". DB_PREFIX ."extension` (`extension_id`, `type`, `code`) VALUES (NULL, 'total', 'category_discount'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_category_discount', 'total_category_discount_sort_order', '2', '0'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_category_discount', 'total_category_discount_status', '1', '0');");
		}
		
		// Customer Group Discount 
		if(in_array('customer_group', $this->discount_modules)) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX ."customer_group_discount` (`customer_group_discount_id` int(11) NOT NULL AUTO_INCREMENT, `customer_group_id` int(11) NOT NULL, `priority` int(5) NOT NULL DEFAULT '1', `type`char(1) NOT NULL, ";
			$sql .= "`percentage` decimal(15,4) NOT NULL DEFAULT '0.0000',`status` INT  NOT NULL DEFAULT '1', `date_start` date NOT NULL DEFAULT '0000-00-00', `date_end` date NOT NULL DEFAULT '0000-00-00', PRIMARY KEY (`customer_group_discount_id`), KEY `customer_group_id` (`customer_group_id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		
			$this->db->query($sql);
		
			$this->db->query("INSERT INTO `". DB_PREFIX ."extension` (`extension_id`, `type`, `code`) VALUES (NULL, 'total', 'customer_group_discount'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_customer_group_discount', 'total_customer_group_discount_sort_order', '2', '0'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_customer_group_discount', 'total_customer_group_discount_status', '1', '0');");
		}
		
		// Manufacturer Discount
		if(in_array('manufacturer', $this->discount_modules)) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX ."manufacturer_discount` (`manufacturer_discount_id` int(11) NOT NULL AUTO_INCREMENT, `manufacturer_id` int(11) NOT NULL, `customer_group_id` int(11) NOT NULL, `priority` int(5) NOT NULL DEFAULT '1', ";
			$sql .= "`percentage` decimal(15,4) NOT NULL DEFAULT '0.0000', `qty` int(1) NOT NULL DEFAULT '0',`status` INT  NOT NULL DEFAULT '1', `date_start` date NOT NULL DEFAULT '0000-00-00', `date_end` date NOT NULL DEFAULT '0000-00-00', PRIMARY KEY (`manufacturer_discount_id`), KEY `manufacturer_id` (`manufacturer_id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		
			$this->db->query($sql);
		
			$this->db->query("INSERT INTO `". DB_PREFIX ."extension` (`extension_id`, `type`, `code`) VALUES (NULL, 'total', 'manufacturer_discount'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_manufacturer_discount', 'total_manufacturer_discount_sort_order', '2', '0'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_manufacturer_discount', 'total_manufacturer_discount_status', '1', '0');");
		}
		// Ordertotal Discount
		if(in_array('ordertotal', $this->discount_modules)) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX ."ordertotal_discount` (`ordertotal_discount_id` int(11) NOT NULL AUTO_INCREMENT, `ordertotal` int(11) NOT NULL, `customer_group_id` int(11) NOT NULL, `priority` int(5) NOT NULL DEFAULT '1', `type`char(1) NOT NULL, ";
			$sql .= "`percentage` decimal(15,4) NOT NULL DEFAULT '0.0000',`status` INT  NOT NULL DEFAULT '1', `date_start` date NOT NULL DEFAULT '0000-00-00', `date_end` date NOT NULL DEFAULT '0000-00-00', PRIMARY KEY (`ordertotal_discount_id`), KEY `ordertotal` (`ordertotal`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		
			$this->db->query($sql);
		
			$this->db->query("INSERT INTO `". DB_PREFIX ."extension` (`extension_id`, `type`, `code`) VALUES (NULL, 'total', 'ordertotal_discount'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_ordertotal_discount', 'total_ordertotal_discount_sort_order', '2', '0'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_ordertotal_discount', 'total_ordertotal_discount_status', '1', '0');");
		}
		// Volume Discount  
		if(in_array('volume', $this->discount_modules)) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX ."volume_discount` (`volume_discount_id` int(11) NOT NULL AUTO_INCREMENT, `customer_group_id` int(11) NOT NULL, `priority` int(5) NOT NULL DEFAULT '1', ";
			$sql .= "`percentage` decimal(15,4) NOT NULL DEFAULT '0.0000', `qty` int(1) NOT NULL DEFAULT '0',`status` INT  NOT NULL DEFAULT '1', `date_start` date NOT NULL DEFAULT '0000-00-00', `date_end` date NOT NULL DEFAULT '0000-00-00', PRIMARY KEY (`volume_discount_id`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		
			$this->db->query($sql);
		
			$this->db->query("INSERT INTO `". DB_PREFIX ."extension` (`extension_id`, `type`, `code`) VALUES (NULL, 'total', 'volume_discount'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_volume_discount', 'total_volume_discount_sort_order', '2', '0'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_volume_discount', 'total_volume_discount_status', '1', '0');");
		}
		// Loyalty Discount
		if(in_array('volume', $this->discount_modules)) {
			$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX ."loyalty_discount` (`loyalty_discount_id` int(11) NOT NULL AUTO_INCREMENT, `ordertotal` int(11) NOT NULL, `customer_group_id` int(11) NOT NULL, `priority` int(5) NOT NULL DEFAULT '1', `order_status` VARCHAR(96) NOT NULL, ";
			$sql .= "`percentage` decimal(15,4) NOT NULL DEFAULT '0.0000',`status` INT  NOT NULL DEFAULT '1', `date_start` date NOT NULL DEFAULT '0000-00-00', `date_end` date NOT NULL DEFAULT '0000-00-00', PRIMARY KEY (`loyalty_discount_id`), KEY `ordertotal` (`ordertotal`) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		
			$this->db->query($sql);
		
			$this->db->query("INSERT INTO `". DB_PREFIX ."extension` (`extension_id`, `type`, `code`) VALUES (NULL, 'total', 'loyalty_discount'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_loyalty_discount', 'total_loyalty_discount_sort_order', '2', '0'); ");
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', 'total_loyalty_discount', 'total_loyalty_discount_status', '1', '0');");
		}
		*/
	}
	
	public function uninstall() {
		
		foreach($this->discount_modules as $module) {
			$this->load->controller('extension/module/discounts_pack/discount_' . $module . '/uninstall');
		}
		
		$this->db->query("DELETE FROM `". DB_PREFIX ."setting` WHERE `code` = 'module_discounts_pack';");
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/discounts_pack')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		return !$this->error;
	}
}