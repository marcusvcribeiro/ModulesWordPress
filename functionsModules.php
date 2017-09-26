if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_modulos',
		'title' => 'Módulos',
		'fields' => array (
			array (
				'key' => 'field_58496688d5d63',
				'label' => 'Módulos',
				'name' => 'modules',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Accordions',
						'name' => 'accordions',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849ac3e356e7',
								'label' => 'Accordions',
								'name' => 'accordions-repeater',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5849ac52356e8',
										'label' => 'Título',
										'name' => 'title',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5849ac59356e9',
										'label' => 'Conteúdo',
										'name' => 'content',
										'type' => 'wysiwyg',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'toolbar' => 'full',
										'media_upload' => 'yes',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'row',
								'button_label' => 'Adicionar accordion',
							),
						),
					),
					array (
						'label' => 'Call to action',
						'name' => 'call-to-action',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849aa2f3defc',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5849aa353defd',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Conteúdo',
						'name' => 'content',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849a45460947',
								'label' => 'Conteúdo',
								'name' => 'the-content',
								'type' => 'wysiwyg',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
						),
					),
					array (
						'label' => 'Conteúdo + Imagem',
						'name' => 'content-image',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_58499f04a5ce7',
								'label' => 'Alinhamento',
								'name' => 'content-align',
								'type' => 'select',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									'right' => 'Texto na direita, imagem na esquerda',
									'left' => 'Texto na esquerda, imagem na direita',
								),
								'default_value' => 'right : Texto na direita, imagem na esquerda',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_58499f60a5ce8',
								'label' => 'Imagem com borda?',
								'name' => 'image-border',
								'type' => 'select',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									'yes' => 'Sim',
									'content-image-no-border' => 'Não',
								),
								'default_value' => 'yes : Sim',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_58499f97a5ce9',
								'label' => 'Imagem',
								'name' => 'image',
								'type' => 'image',
								'required' => 1,
								'column_width' => '',
								'save_format' => 'object',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_58499ffea5cea',
								'label' => 'Texto',
								'name' => 'text',
								'type' => 'wysiwyg',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'no',
							),
							array (
								'key' => 'field_5849a00ba5ceb',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'Insira o link completo, incluindo http:// ou https://',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5849a686529f2',
								'label' => 'Texto do botão',
								'name' => 'button',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
					array (
						'label' => 'Depoimentos',
						'name' => 'testimonials',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
						),
					),
					array (
						'label' => 'Formulário',
						'name' => 'form',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_584966a8d5d64',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_584966afd5d65',
								'label' => 'Formulário',
								'name' => 'my-form',
								'type' => 'acf_cf7',
								'required' => 1,
								'column_width' => '',
								'disable' => array (
									0 => 0,
								),
								'allow_null' => 0,
								'multiple' => 0,
								'hide_disabled' => 0,
							),
						),
					),
					array (
						'label' => 'Galeria',
						'name' => 'gallery',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849adaf43e94',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5849adc043e95',
								'label' => 'Imagens',
								'name' => 'gallery-repeater',
								'type' => 'gallery',
								'required' => 1,
								'column_width' => '',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
						),
					),
					array (
						'label' => 'Motivos',
						'name' => 'features',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_58499a84540c7',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_58499a89540c8',
								'label' => 'Quantidade de colunas',
								'name' => 'features-columns',
								'type' => 'select',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									2 => 2,
									3 => 3,
									4 => 4,
									5 => 5,
								),
								'default_value' => '2 : 2',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_58499aa7540c9',
								'label' => 'Motivos',
								'name' => 'features-repeater',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_58499ab9540ca',
										'label' => 'Ícone',
										'name' => 'icon',
										'type' => 'image',
										'instructions' => 'Dimensões recomendadas: 100x100 pixels',
										'required' => 1,
										'column_width' => '',
										'save_format' => 'url',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
									array (
										'key' => 'field_58499adc540cb',
										'label' => 'Título',
										'name' => 'title',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
									array (
										'key' => 'field_58499ae5540cc',
										'label' => 'Texto',
										'name' => 'text',
										'type' => 'textarea',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'maxlength' => '',
										'rows' => '',
										'formatting' => 'br',
									),
									array (
										'key' => 'field_58499af0540cd',
										'label' => 'Link',
										'name' => 'link',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'Insira o link completo, incluindo http:// ou https://',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'row',
								'button_label' => 'Adicionar motivo',
							),
						),
					),
					array (
						'label' => 'Projetos',
						'name' => 'projects',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_58497e2ad00d0',
								'label' => 'Imagem de fundo',
								'name' => 'projects-background',
								'type' => 'image',
								'column_width' => '',
								'save_format' => 'url',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_58497e46d00d1',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_58497e59d00d2',
								'label' => 'Projetos',
								'name' => 'projects-list',
								'type' => 'relationship',
								'required' => 1,
								'column_width' => '',
								'return_format' => 'object',
								'post_type' => array (
									0 => 'projetos',
								),
								'taxonomy' => array (
									0 => 'all',
								),
								'filters' => array (
									0 => 'search',
								),
								'result_elements' => array (
									0 => 'post_type',
									1 => 'post_title',
								),
								'max' => '',
							),
						),
					),
					array (
						'label' => 'Serviços',
						'name' => 'services',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849a4e42128b',
								'label' => 'Serviços',
								'name' => 'services-repeater',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5849a53b2128c',
										'label' => 'Título',
										'name' => 'title',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5849a5472128d',
										'label' => 'Descrição',
										'name' => 'desc',
										'type' => 'textarea',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'maxlength' => '',
										'rows' => '',
										'formatting' => 'br',
									),
									array (
										'key' => 'field_5849a54d2128e',
										'label' => 'Link',
										'name' => 'link',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'Insira o link completo, incluindo http:// ou https://',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'row',
								'button_label' => 'Adicionar serviço',
							),
						),
					),
					array (
						'label' => 'Tabs',
						'name' => 'tabs',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849a7c0a76f2',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5849a7c5a76f3',
								'label' => 'Tabs',
								'name' => 'tabs-repeater',
								'type' => 'repeater',
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_5849a7d6a76f4',
										'label' => 'Título',
										'name' => 'tab-title',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'html',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5849a7e7a76f5',
										'label' => 'Conteúdo',
										'name' => 'tab-content',
										'type' => 'wysiwyg',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'toolbar' => 'full',
										'media_upload' => 'yes',
									),
								),
								'row_min' => '',
								'row_limit' => '',
								'layout' => 'row',
								'button_label' => 'Adicionar tab',
							),
						),
					),
					array (
						'label' => 'Vídeo',
						'name' => 'video',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5849ab12e7951',
								'label' => 'Título',
								'name' => 'title',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5849ab17e7952',
								'label' => 'Tipo de vídeo',
								'name' => 'video-type',
								'type' => 'select',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									'youtube' => 'YouTube',
									'vimeo' => 'Vimeo',
								),
								'default_value' => 'youtube : YouTube',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_5849ab35e7953',
								'label' => 'Código do vídeo',
								'name' => 'video-code',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'Insira apenas o código do vídeo no YouTube ou Vimeo. Exemplo: zROstIQu5pg',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
						),
					),
				),
				'button_label' => 'Adicionar módulo',
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
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-blog.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'revisions',
				5 => 'author',
				6 => 'format',
				7 => 'featured_image',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
}