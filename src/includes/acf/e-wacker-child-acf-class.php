<?php

class E_Wacker_ACF {

  public function __construct() {
    add_action('admin_init', array( $this, 'acf_admin_init'), 99);
    add_action('acf/init', array( $this, 'acf_init' ) );

    // hide acf in admin - client doesnt need to see this
    // add_filter('acf/settings/show_admin', '__return_false');
  }


  public function acf_admin_init() {
    // hide options page
    // remove_menu_page('acf-options');
  }

  public function acf_init() {
    if( function_exists('acf_add_local_field_group') ):

      // add page settings
      acf_add_local_field_group(array(
      	'key' => 'group_5b7181e5baf1f',
      	'title' => 'Page Settings',
      	'fields' => array(
      		array(
      			'key' => 'field_5b7181ea372fb',
      			'label' => 'Show Footer Contact CTA',
      			'name' => 'show_footer_contact_cta',
      			'type' => 'true_false',
      			'default_value' => 0,
      		),
          array(
      			'key' => 'field_5b73f9b41c0f2',
      			'label' => 'Show Post Loop',
      			'name' => 'show_post_loop',
      			'type' => 'true_false',
      			'default_value' => 0,
      		),
          array(
      			'key' => 'field_5b73f850a2b6d',
      			'label' => 'Loop Post Category',
      			'name' => 'loop_post_category',
      			'type' => 'taxonomy',
            'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b73f9b41c0f2',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      			'taxonomy' => 'category',
      			'field_type' => 'radio',
      			'allow_null' => 0,
      			'add_term' => 0,
      			'save_terms' => 0,
      			'load_terms' => 0,
      			'return_format' => 'id',
      			'multiple' => 0,
      		),
          array(
      			'key' => 'field_5b740bdc8da44',
      			'label' => 'Loop Number Posts',
      			'name' => 'loop_number_posts',
      			'type' => 'number',
      			'conditional_logic' => array(
      				array(
      					array(
      						'field' => 'field_5b73f9b41c0f2',
      						'operator' => '==',
      						'value' => '1',
      					),
      				),
      			),
      			'default_value' => 9,
      			'min' => 0,
      			'max' => 20,
      			'step' => 1,
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
      			),
      		),
      	),
      	'position' => 'side',
      ));

      endif;
  }
}

?>
