<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59ac23c1f0391',
	'title' => 'Content',
	'fields' => array (
		array (
			'key' => 'field_59ac23e6c51b4',
			'label' => 'Modules',
			'name' => 'modules',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array (
				'59ac23f17bd60' => array (
					'key' => '59ac23f17bd60',
					'name' => 'text',
					'label' => 'Text',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ac2407c51b5',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ac2450c9677' => array (
					'key' => '59ac2450c9677',
					'name' => 'quote',
					'label' => 'Quote',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ac2458c9678',
							'label' => 'Quote',
							'name' => 'quote',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => '',
						),
						array (
							'key' => 'field_59ac246dc9679',
							'label' => 'Attribution',
							'name' => 'attribution',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ac5873ffc20' => array (
					'key' => '59ac5873ffc20',
					'name' => 'slider',
					'label' => 'Slider',
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_59ac5885ffc21',
							'label' => 'Description',
							'name' => 'description',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array (
							'key' => 'field_59ac589fffc22',
							'label' => 'Slides',
							'name' => 'slides',
							'type' => 'gallery',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'min' => '',
							'max' => '',
							'insert' => 'append',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_59ac58b7ffc23',
							'label' => 'Text Slides',
							'name' => 'text_slides',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'row',
							'button_label' => 'Add Text Slide',
							'sub_fields' => array (
								array (
									'key' => 'field_59ac58d3ffc24',
									'label' => 'Text',
									'name' => 'text',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array (
									'key' => 'field_59ac5902ffc25',
									'label' => 'Slide Position',
									'name' => 'slide_position',
									'type' => 'number',
									'instructions' => 'Leaving this field will add the slide to the end of the slider',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => '',
									'max' => '',
									'step' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'59b0bf42321bb' => array (
					'key' => '59b0bf42321bb',
					'name' => 'image',
					'label' => 'Image',
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_59b0bf4b321bc',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_59b0bf7e321bd',
							'label' => 'Size',
							'name' => 'size',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'content' => 'Content Width',
								'medium' => 'Medium Width',
								'full' => 'Full Width',
							),
							'default_value' => array (
								0 => 'content',
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'59ac51901f521' => array (
					'key' => '59ac51901f521',
					'name' => 'project_slider',
					'label' => 'Project Slider',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59ac519e1f522',
							'label' => 'Project',
							'name' => 'project',
							'type' => 'post_object',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'post_type' => array (
								0 => 'str-slider',
							),
							'taxonomy' => array (
							),
							'allow_null' => 0,
							'multiple' => 0,
							'return_format' => 'object',
							'ui' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
				'59b0bfce321be' => array (
					'key' => '59b0bfce321be',
					'name' => 'contact',
					'label' => 'Contact',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_59b0bfda321bf',
							'label' => 'Address',
							'name' => 'address',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array (
							'key' => 'field_59b0bfe2321c0',
							'label' => 'Phone Number',
							'name' => 'phone_number',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array (
							'key' => 'field_59b0bffc321c1',
							'label' => 'Email',
							'name' => 'email',
							'type' => 'email',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Module',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array (
		array (
			array (
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
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'custom_fields',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_59987b535a254',
	'title' => 'Project Sliders',
	'fields' => array (
		array (
			'key' => 'field_59987b6595330',
			'label' => 'Project Description',
			'name' => 'description',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59a8b50fe97fe',
			'label' => 'Project Slides',
			'name' => 'slides',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_59a8b86192296',
			'label' => 'Project Text Slides',
			'name' => 'text_slides',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Text Slide',
			'sub_fields' => array (
				array (
					'key' => 'field_59a8b87492297',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'basic',
					'media_upload' => 1,
					'delay' => 0,
				),
				array (
					'key' => 'field_59a8b8a792298',
					'label' => 'Slide Position',
					'name' => 'slide_position',
					'type' => 'number',
					'instructions' => 'Leaving this field will add the slide to the end of the slider',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
				),
				array (
					'key' => 'field_59a8b8dc92299',
					'label' => '"Project Info" Slide',
					'name' => 'project_info_slide',
					'type' => 'true_false',
					'instructions' => 'Clicking on "Project Info" will jump to this slide',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'str-slider',
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
