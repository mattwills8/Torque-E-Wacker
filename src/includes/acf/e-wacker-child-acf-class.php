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

      // add footer settings
      acf_add_local_field_group(array(
      	'key' => 'group_5b75c5be7ffd2',
      	'title' => 'Torque Footer Settings',
      	'fields' => array(
      		array(
      			'key' => 'field_5b75c5c3b2a37',
      			'label' => 'Show Footer Contact CTA',
      			'name' => 'show_footer_contact_cta',
      			'type' => 'true_false',
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'post',
      			),
      		),
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'page',
      			),
      		),
      	),
      	'position' => 'side',
      	'active' => 1,
      ));

      // add post meta
      acf_add_local_field_group(array(
      	'key' => 'group_5b742ba01da18',
      	'title' => 'Torque Post Meta',
      	'fields' => array(
      		array(
      			'key' => 'field_5b742bbbc45a7',
      			'label' => 'Show Anchor Icon in Loop',
      			'name' => 'show_link_button',
      			'type' => 'true_false',
      		),
          array(
      			'key' => 'field_5b742e32d940e',
      			'label' => 'Forms',
      			'name' => 'post_forms',
      			'type' => 'file',
      			'instructions' => 'Upload a zip file containing the forms to attach to this post.',
      			'return_format' => 'array',
      			'library' => 'all',
      			'min_size' => '',
      			'max_size' => 5,
      			'mime_types' => 'zip',
      		),
        ),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_type',
      				'operator' => '==',
      				'value' => 'post',
      			),
      		),
      	),
      	'active' => 1,
      ));

      // add links section
      acf_add_local_field_group(array(
      	'key' => 'group_5b759c48d9cbc',
      	'title' => 'Torque Links Section',
      	'fields' => array(
      		array(
      			'key' => 'field_5b759c4f11a73',
      			'label' => 'Links',
      			'name' => 'links_section_links',
      			'type' => 'repeater',
      			'collapsed' => 'field_5b759cb611a75',
      			'layout' => 'table',
      			'button_label' => 'Add Link',
      			'sub_fields' => array(
      				array(
      					'key' => 'field_5b759c7711a74',
      					'label' => 'Image',
      					'name' => 'image',
      					'type' => 'image',
      					'required' => 1,
      					'return_format' => 'url',
      					'preview_size' => 'medium',
      					'library' => 'all',
      				),
      				array(
      					'key' => 'field_5b759cb611a75',
      					'label' => 'Title',
      					'name' => 'title',
      					'type' => 'text',
      					'required' => 1,
      				),
      				array(
      					'key' => 'field_5b759cc311a76',
      					'label' => 'CTA Text',
      					'name' => 'cta_text',
      					'type' => 'text',
      					'default_value' => 'Learn More',
      					'placeholder' => 'Learn More',
      				),
              array(
      					'key' => 'field_5b759ce311a77',
      					'label' => 'CTA Link',
      					'name' => 'cta_link',
      					'type' => 'page_link',
      					'required' => 1,
      					'post_type' => array(
      						0 => 'page',
      						1 => 'post',
      					),
      					'allow_null' => 0,
      					'allow_archives' => 1,
      					'multiple' => 0,
      				),
      			),
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
      	'menu_order' => 0,
      	'position' => 'normal',
      	'style' => 'default',
      	'label_placement' => 'top',
      	'instruction_placement' => 'label',
      	'hide_on_screen' => '',
      	'active' => 1,
      	'description' => '',
      ));

      // add operations
      acf_add_local_field_group(array(
      	'key' => 'group_5b7b241a5920e',
      	'title' => 'Operations',
      	'fields' => array(
      		array(
      			'key' => 'field_5b7b250f29a46',
      			'label' => 'Operations',
      			'name' => 'operations',
      			'type' => 'repeater',
      			'collapsed' => 'field_5b7b258729a47',
      			'layout' => 'row',
      			'sub_fields' => array(
      				array(
      					'key' => 'field_5b7b258729a47',
      					'label' => 'Title',
      					'name' => 'title',
      					'type' => 'text',
      					'required' => 1,
      				),
      				array(
      					'key' => 'field_5b7b259e29a48',
      					'label' => 'Content Col 1',
      					'name' => 'content_col_1',
      					'type' => 'wysiwyg',
      					'tabs' => 'all',
      					'toolbar' => 'full',
      					'media_upload' => 1,
      				),
      				array(
      					'key' => 'field_5b7b25b629a49',
      					'label' => 'Content Col 2',
      					'name' => 'content_col_2',
      					'type' => 'wysiwyg',
      					'tabs' => 'all',
      					'toolbar' => 'full',
      					'media_upload' => 1,
      				),
      			),
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_template',
      				'operator' => '==',
      				'value' => 'operations.php',
      			),
      		),
      	),
      	'active' => 1,
      ));


      // contact page
      acf_add_local_field_group(array(
      	'key' => 'group_5b7c6009e6a78',
      	'title' => 'Contact',
      	'fields' => array(
      		array(
      			'key' => 'field_5b7c6021a1968',
      			'label' => 'Address',
      			'name' => 'address',
      			'type' => 'wysiwyg',
      			'instructions' => '',
      		),
      		array(
      			'key' => 'field_5b7c61a1a1969',
      			'label' => 'Telephone',
      			'name' => 'telephone',
      			'type' => 'text',
      		),
      		array(
      			'key' => 'field_5b7c61aaa196a',
      			'label' => 'Fax',
      			'name' => 'fax',
      			'type' => 'text',
      		),
      		array(
      			'key' => 'field_5b7c61b9a196b',
      			'label' => 'Column 1',
      			'name' => 'column_1',
      			'type' => 'repeater',
      			'layout' => 'row',
      			'button_label' => '',
      			'sub_fields' => array(
      				array(
      					'key' => 'field_5b7c61cea196c',
      					'label' => 'Title',
      					'name' => 'title',
      					'type' => 'text',
      				),
      				array(
      					'key' => 'field_5b7c61dca196d',
      					'label' => 'Content',
      					'name' => 'content',
      					'type' => 'wysiwyg',
      				),
      			),
      		),
      		array(
      			'key' => 'field_5b7c61eba196e',
      			'label' => 'Column 2',
      			'name' => 'column_2',
      			'type' => 'repeater',
      			'layout' => 'row',
      			'button_label' => '',
      			'sub_fields' => array(
      				array(
      					'key' => 'field_5b7c61f6a196f',
      					'label' => 'Title',
      					'name' => 'title',
      					'type' => 'text',
      				),
      				array(
      					'key' => 'field_5b7c6213a1970',
      					'label' => 'Content',
      					'name' => 'content',
      					'type' => 'wysiwyg',
      				),
      			),
      		),
      	),
      	'location' => array(
      		array(
      			array(
      				'param' => 'post_template',
      				'operator' => '==',
      				'value' => 'contact.php',
      			),
      		),
      	),
      	'menu_order' => 0,
      	'position' => 'normal',
      	'style' => 'default',
      	'label_placement' => 'top',
      	'instruction_placement' => 'label',
      	'hide_on_screen' => '',
      	'active' => 1,
      	'description' => '',
      ));

      endif;
  }
}

?>
