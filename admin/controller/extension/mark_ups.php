<?php

class ControllerExtensionMarkups extends Controller {
	private $error = array();
	private $ssl = 'SSL';// объявляем переменную - массив с возможными ошибками

	public function __construct( $registry ) {
		parent::__construct( $registry );
		$this->ssl = true;
	}

	public function index() {
		$this->load->language('extension/mark_ups');
		$this->document->setTitle($this->language->get('heading_title'));
		// регистрируем модуль
		$this->load->model('setting/setting');
		$data['ok'] = 1;
	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('mark_ups', $this->request->post);
			$data['ok'] = 2;
			$this->session->data['success'] = $this->language->get('text_success');
			$data['success'] = $this->session->data['success'] ;

		//	$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}
		// определяем переменные
print_r("1");
exit;
		$data['user_token'] = $this->session->data['user_token'];
		$data['heading_title']  	= $this->language->get('heading_title');
		$data['text_edit'] 				= $this->language->get('text_edit');
		$data['text_enabled'] 		= $this->language->get('text_enabled');
		$data['text_disabled'] 		= $this->language->get('text_disabled');
		$data['table_image'] 			= $this->language->get('table_image');
		$data['table_name'] 			= $this->language->get('table_name');
		$data['table_text'] 			= $this->language->get('table_text');
		$data['button_save'] 			= $this->language->get('button_save');
		$data['button_cancel'] 		= $this->language->get('button_cancel');

		$data['table_header'] 		= $this->language->get('table_header');
		$data['table_edit'] 			= $this->language->get('table_edit');
		$data['table_delete'] 		= $this->language->get('table_delete');
		$data['table_id'] 				= $this->language->get('table_id');
		//$data['token'] 						= $this->session->data['token'];
		$data['title_add'] 				= $this->language->get('title_add');

		$data['table_header'] 		= $this->language->get( 'table_header' );
		$data['table_id'] 				= $this->language->get( 'table_id' );
		$data['table_name'] 			= $this->language->get( 'table_name' );
		$data['table_procent'] 		= $this->language->get( 'table_procent' );
		$data['table_cheslo'] 		= $this->language->get( 'table_cheslo' );
		$data['table_del'] 				= $this->language->get( 'table_del' );
		$data['table_up'] 				= $this->language->get( 'table_up' );
		$data['table_prin'] 			= $this->language->get( 'table_prin' );

		$data['tab_manufacture'] 	= $this->language->get( 'tab_manufacture' );
		$data['tab_category'] 		= $this->language->get( 'tab_category' );

		$data['button_prim'] 			= $this->language->get( 'button_prim' );
		$data['button_del'] 			= $this->language->get( 'button_del' );
		$data['button_red'] 			= $this->language->get( 'button_red' );

		$data['text_etap0'] 			= $this->language->get( 'text_etap0' );
		$data['text_etap1m'] 			= $this->language->get( 'text_etap1m' );
		$data['text_etap1c'] 			= $this->language->get( 'text_etap1c' );
		$data['text_etap2'] 			= $this->language->get( 'text_etap2' );
		$data['text_etap3'] 			= $this->language->get( 'text_etap3' );
		$data['text_cheslo'] 			= $this->language->get( 'text_cheslo' );
		$data['text_procent'] 		= $this->language->get( 'text_procent' );
		$data['text_procent'] 		= $this->language->get( 'text_procent' );
    $data['text_no_data'] 		= $this->language->get( 'text_no_data' );
		$data['del_help'] 				= $this->language->get('del_help');

		$data['$m_del'] 						= array();
		$data['$temp_m'] 						= array();
		$data['$c_del'] 						= array();
		$data['$temp_c'] 						= array();
		$data['$table_m'] 					= array();
		$data['$table_c'] 					= array();
		$data['$manufacture_name'] 	= array();
		$data['$category_name'] 		= array();

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		// хлебные крошки, нужны для оформления модуля "как все"
		$data['breadcrumbs'] = array();
		// Добавляем по одной крошки, сначала ссылка на главную страницу
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'), // text_home по всей видимости доступен отовсюду
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);
		// добавляем ссылку на список с модулями, прописано в своем языковом файле
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/mark_ups', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);

		// кнопки

		$data['action'] = $this->url->link('extension/mark_ups', 'user_token=' . $this->session->data['user_token'], 'SSL');

		$data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], $this->ssl);
		if (isset($this->request->post['mark_ups_status'])) {
			$data['mark_ups_status'] = $this->request->post['mark_ups_status'];
		} else {
			$data['mark_ups_status'] = $this->config->get('mark_ups_status');
		}
		// получение коментов

		$data['commets'] = array();
		$this->load->model('extension/mark_ups');
		//$data['mark_ups'] = $this->model_comments_comments->getAll();

		$data['n_manufacture'] = $this->model_extension_mark_ups->getNManufacture();
		$data['n_category'] = $this->model_extension_mark_ups->getNCategory();
		$data['name_manufacture'] = $this->model_extension_mark_ups->getNameManufacture();
		$data['name_category'] = $this->model_extension_mark_ups->getNameCategory();

		// подключаем с админской части шапки колонки слева и футера
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
// передаем данные на отрисовку
		$this->response->setOutput($this->load->view('extension/mark_ups', $data));
	}
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/mark_ups')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function deleteManufacture(){
		// получаем значения
		$text = ($this->request->post['id_m']) ? $this->request->post['id_m'] : 0;
		// массив вывода
		$json = array();
		if (!$text) {
			$json['error'] = 'no id';
		} else {
			$this->load->model('extension/mark_ups');
			$json['manufacture'] = $this->model_extension_mark_ups->delManufacture($text);
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function deleteCategory(){
		// получаем значения
		$text = ($this->request->post['id_c']) ? $this->request->post['id_c'] : 0;
		// массив вывода
		$json = array();
		if (!$text) {
			$json['error'] = 'no id';
		} else {
			$this->load->model('extension/mark_ups');
			$json['manufacture'] = $this->model_extension_mark_ups->delCategory($text);
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addManufacture(){
		// получаем значения
		$id = isset($this->request->post['manufacturer_id']) ? $this->request->post['manufacturer_id']:8;
		$procent = isset($this->request->post['procent']) ? $this->request->post['procent']:0;
		$cheslo = isset($this->request->post['cheslo']) ? $this->request->post['cheslo']:0;

		// массив вывода
		$json = array();
		$this->load->model('extension/mark_ups');
		$json['manufacture-add'] = $this->model_extension_mark_ups->Add_insert_m($id, $procent, $cheslo);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function addCategory(){
		// получаем значения
		$id = isset($this->request->post['category_id']) ? $this->request->post['category_id']:28;
		$procent = isset($this->request->post['procent']) ? $this->request->post['procent']:0;
		$cheslo = isset($this->request->post['cheslo']) ? $this->request->post['cheslo']:0;
		// массив вывода
		$json = array();
		$this->load->model('extension/mark_ups');
		$json['manufacture-add'] = $this->model_extension_mark_ups->Add_insert_c($id, $procent, $cheslo);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}
