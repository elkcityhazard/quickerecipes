<?php
/* start-wp-plugin-header */
/*
  Plugin Name: WP Sheet Editor - YOAST SEO
  Description: Use the spreadsheet editor to edit the SEO title, description, and keyword of your posts.
  Version: 1.1.4
  Author: WP Sheet Editor
  Author URI: https://wpsheeteditor.com/?utm_source=wp-admin&utm_medium=plugins-list&utm_campaign=yoast
  Plugin URI: http://wpsheeteditor.com/?utm_source=wp-admin&utm_medium=plugins-list&utm_campaign=yoast
 */
/* end-wp-plugin-header */
if (!class_exists('WP_Sheet_Editor_YOAST_SEO_Lite')) {

	class WP_Sheet_Editor_YOAST_SEO_Lite {

		static private $instance = false;

		private function __construct() {
			
		}

		function notify_wrong_core_version() {
			$plugin_data = get_plugin_data(__FILE__, false, false);
			?>
			<div class="notice notice-error">
				<p><?php _e('Please update the WP Sheet Editor plugin to the version 2.0.0 or higher. The plugin "' . $plugin_data['Name'] . '" requires that version.', VGSE()->textname); ?></p>
			</div>
			<?php
		}

		function init() {
			// Auto deactivate itself if the full YOAST module is active
			if (class_exists('WP_Sheet_Editor_YOAST_SEO') ){
				deactivate_plugins(plugin_basename(__FILE__));
			}
		
			if (version_compare(VGSE()->version, '2.0.0') < 0) {
				$this->notify_wrong_core_version();
				return;
			}
			// exit if yoast seo plugin is not active
			if (!$this->is_yoast_seo_plugin_active()) {
				return;
			}

			add_action('vg_sheet_editor/editor/before_init', array($this, 'register_columns'));
			add_action('vg_sheet_editor/load_rows/output', array($this, 'filter_seo_score_cell_html'), 10, 3);
			add_filter('vg_sheet_editor/woocommerce/teasers/allowed_columns', array($this, 'allow_seo_columns') );
		}
		
		function allow_seo_columns($column_keys){
			$column_keys[] = '_yoast_wpseo_focuskw';
			$column_keys[] = "_yoast_wpseo_metadesc";
			$column_keys[] = '_yoast_wpseo_title';
			return $column_keys;
		}

		/**
		 * Filter html of SEO score cells to display the score icon.
		 * @param array $data
		 * @param array $qry
		 * @param array $spreadsheet_columns
		 * @return array
		 */
		function filter_seo_score_cell_html($data, $qry, $spreadsheet_columns) {

			if (!isset($spreadsheet_columns['_yoast_wpseo_linkdex'])) {
				return $data;
			}
			foreach ($data as $post_index => $post_row) {

				$noindex = (int) VGSE()->helpers->get_current_provider()->get_item_meta($post_row['ID'], '_yoast_wpseo_meta-robots-noindex', true);

				$score = '';
				if ($noindex) {
					$score = 'noindex';
				} elseif (!empty($post_row['_yoast_wpseo_linkdex'])) {
					$score = WPSEO_Utils::translate_score($post_row['_yoast_wpseo_linkdex']);
				}
				$data[$post_index]['_yoast_wpseo_linkdex'] = '<div class="' . esc_attr('wpseo-score-icon ' . $score) . '"></div>';
			}
			return $data;
		}

		/**
		 * Is yoast seo plugin active
		 * @return boolean
		 */
		function is_yoast_seo_plugin_active() {
			if (in_array('wordpress-seo-premium/wp-seo-premium.php', apply_filters('active_plugins', get_option('active_plugins'))) || in_array('wordpress-seo/wp-seo.php', apply_filters('active_plugins', get_option('active_plugins')))) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * Test whether the yoast metabox is hidden either by choice of the admin or because
		 * the post type is not a public post type
		 *
		 * @param  string $post_type (optional) The post type to test, defaults to the current post post_type
		 *
		 * @return  bool        Whether or not the meta box (and associated columns etc) should be hidden
		 */
		function is_yoast_metabox_hidden($post_type = null) {
			$options = get_option('wpseo_titles');
			$disabled = false;
			if ((isset($options['hideeditbox-' . $post_type]) && $options['hideeditbox-' . $post_type] === true) || (isset($options['hideeditbox-tax-' . $post_type]) && $options['hideeditbox-tax-' . $post_type] === true)) {
				$disabled = true;
			}
			return $disabled;
		}

		/**
		 * Creates or returns an instance of this class.
		 */
		static function get_instance() {
			if (null == WP_Sheet_Editor_YOAST_SEO_Lite::$instance) {
				WP_Sheet_Editor_YOAST_SEO_Lite::$instance = new WP_Sheet_Editor_YOAST_SEO_Lite();
				WP_Sheet_Editor_YOAST_SEO_Lite::$instance->init();
			}
			return WP_Sheet_Editor_YOAST_SEO_Lite::$instance;
		}

		function __set($name, $value) {
			$this->$name = $value;
		}

		function __get($name) {
			return $this->$name;
		}

		/**
		 * Register spreadsheet columns
		 */
		function register_columns($editor) {
			if ($editor->provider->key === 'user') {
				return;
			}
			$post_types = $editor->args['enabled_post_types'];
			$tax_settings_global = array(
				'allow_to_save' => false,
				'is_locked' => true,
				'lock_template_key' => 'lock_cell_template_pro',
			);

			foreach ($post_types as $post_type) {

				if ($this->is_yoast_metabox_hidden($post_type)) {
					continue;
				}
				$tax_settings = taxonomy_exists($post_type) ? $tax_settings_global : array();
				$editor->args['columns']->register_item('_yoast_wpseo_title', $post_type, array_merge(array(
					'data_type' => 'meta_data',
					'unformatted' => array('data' => '_yoast_wpseo_title'),
					'column_width' => 300,
					'title' => __('SEO Title', VGSE()->textname),
					'type' => '',
					'supports_formulas' => true,
					'formatted' => array('data' => '_yoast_wpseo_title', 'renderer' => 'html'),
					'allow_to_hide' => true,
					'allow_to_rename' => true,
								), $tax_settings));
				$desc_key = ( taxonomy_exists($post_type)) ? '_yoast_wpseo_desc' : '_yoast_wpseo_metadesc';
				$editor->args['columns']->register_item($desc_key, $post_type, array_merge(array(
					'data_type' => 'meta_data',
					'unformatted' => array('data' => $desc_key),
					'column_width' => 300,
					'title' => __('SEO Description', VGSE()->textname),
					'type' => '',
					'supports_formulas' => true,
					'formatted' => array('data' => $desc_key),
					'allow_to_hide' => true,
					'allow_to_rename' => true,
								), $tax_settings));
				$editor->args['columns']->register_item('_yoast_wpseo_focuskw', $post_type, array_merge(array(
					'data_type' => 'meta_data',
					'unformatted' => array('data' => '_yoast_wpseo_focuskw'),
					'column_width' => 120,
					'title' => __('SEO Keyword', VGSE()->textname),
					'type' => '',
					'supports_formulas' => true,
					'formatted' => array('data' => '_yoast_wpseo_focuskw', 'renderer' => 'html'),
					'allow_to_hide' => true,
					'allow_to_rename' => true,
								), $tax_settings));


				$noindex_key = ( taxonomy_exists($post_type)) ? '_yoast_wpseo_noindex' : '_yoast_wpseo_meta-robots-noindex';
				$noindex_checked = ( taxonomy_exists($post_type)) ? 'noindex' : '1';
				$noindex_unchecked = ( taxonomy_exists($post_type)) ? 'index' : null;
				$noindex_default = ( taxonomy_exists($post_type)) ? 'noindex' : null;
				$editor->args['columns']->register_item($noindex_key, $post_type, array_merge(array(
					'data_type' => 'meta_data',
					'unformatted' => array('data' => $noindex_key),
					'column_width' => 120,
					'title' => __('SEO No Index', VGSE()->textname),
					'type' => '',
					'supports_formulas' => true,
					'formatted' => array('data' => $noindex_key, 'type' => 'checkbox', 'checkedTemplate' => $noindex_checked, 'uncheckedTemplate' => $noindex_unchecked, 'className' => 'htCenter htMiddle'),
					'default_value' => $noindex_default,
					'allow_to_hide' => true,
					'allow_to_rename' => true,
								), $tax_settings));
				$editor->args['columns']->register_item('_yoast_wpseo_linkdex', $post_type, array(
					'data_type' => 'meta_data',
					'unformatted' => array('data' => '_yoast_wpseo_linkdex', 'readOnly' => true, 'renderer' => 'html'),
					'column_width' => 50,
					'title' => __('SEO', VGSE()->textname),
					'type' => '',
					'supports_formulas' => false,
					'formatted' => array('data' => '_yoast_wpseo_linkdex', 'readOnly' => true, 'renderer' => 'html'),
					'allow_to_hide' => true,
					'allow_to_rename' => true,
					'allow_plain_text' => false,
					'is_locked' => true,
				));

			}
		}

	}

}

if (!function_exists('WP_Sheet_Editor_YOAST_SEO_Lite_Obj')) {

	function WP_Sheet_Editor_YOAST_SEO_Lite_Obj() {
		return WP_Sheet_Editor_YOAST_SEO_Lite::get_instance();
	}

}


add_action('vg_sheet_editor/initialized', 'WP_Sheet_Editor_YOAST_SEO_Lite_Obj', 1);
