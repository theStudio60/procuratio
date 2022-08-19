<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60394a9f7153d',
	'title' => 'Réglages',
	'fields' => array(
		array(
			'key' => 'field_60394aaa8b2ed',
			'label' => 'Réglages du Site',
			'name' => 'website_settings',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_6039612818eee',
					'label' => 'Réglages Globaux',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_60394b01e0eee',
					'label' => ' ',
					'name' => 'global_settings',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
				        array(
							'key' => 'field_61b208be93eee',
							'label' => 'Bouton Principal',
							'name' => 'main_cta',
							'type' => 'link',
							'instructions' => 'Bouton principal, utilisé sur la barre de navigation.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
				    	),
						/*
						array(
							'key' => 'field_67009ae00350a',
							'label' => 'POP-UP Call To Action',
							'name' => 'popup_cta',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
		 
								 
								array(
									'key' => 'field_67009ae00350c',
									'label' => 'Contenu',
									'name' => 'content',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '100',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => 'br',
								),
							),
						),
						//*/
						/*
						array(
							'key' => 'field_677a2caa2d7d8',
							'label' => 'Section Call To Action',
							'name' => 'section_cta',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
 
								array(
									'key' => 'field_67709ac06350d',
									'label' => 'Image',
									'name' => 'image',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '50',
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
						 
								array(
									'key' => 'field_677a2caa2d7da',
									'label' => 'Contenu',
									'name' => 'content',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '50',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => 'br',
								),
							),
						),
							//*/

					),
				),
				array(
					'key' => 'field_6039612818f3e',
					'label' => 'Informations de contact',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_60394b01e0e2d',
					'label' => 'Informations de contact',
					'name' => 'contact_infos',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						
            array(
							'key' => 'field_6039692dcf336',
							'label' => 'Appel au contact',
							'name' => 'contact_call',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Nom de la rue 99 à Ville',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => 'br',
						),
						array(
							'key' => 'field_60394b1de0331',
							'label' => 'URL de Google maps',
							'name' => 'gmap_url',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2743.3264335195327!2d6.559724015787487!3d46.561009667608126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c33df98b0b2c5%3A0x72b5386568793cb6!2sRte%20de%20Bellevue%207%2C%201029%20Villars-Sainte-Croix!5e0!3m2!1sfr!2sch!4v1659449719242!5m2!1sfr!2sch',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_6039692dcfa86',
							'label' => 'Adresse Postale',
							'name' => 'post_address',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => ' 1029 Villars Ste-Croix - Z.I. la Pierreire, Route de Bellevue 7',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_60394b1de0e2e',
							'label' => 'N° de Téléphone',
							'name' => 'phone',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '079 685 26 78',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array( 
							'key' => 'field_6039699ccfa87',
							'label' => 'Email',
							'name' => 'email',
							'type' => 'email',
							'instructions' => 'votre email',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'info@procuratiofinances.ch',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						/*
						array(
							'key' => 'field_60399113f019a',
							'label' => 'Réseaux sociaux',
							'name' => 'social_networks_repeater',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Ajouter un réseau',
							'sub_fields' => array(
								array(
									'key' => 'field_60399135f019b',
									'label' => 'réseau social',
									'name' => 'social_network',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'layout' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_60399256a4372',
											'label' => 'icone',
											'name' => 'icon',
											'type' => 'font-awesome',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'icon_sets' => array(
												0 => 'far',
												1 => 'fab',
											),
											'custom_icon_set' => '',
											'default_label' => '&lt;i class="fab"&gt;&amp;#xf082;&lt;/i&gt; facebook-square',
											'default_value' => 'fab fa-facebook-square',
											'save_format' => 'class',
											'allow_null' => 0,
											'show_preview' => 1,
											'enqueue_fa' => 0,
											'fa_live_preview' => '',
											'choices' => array(
											),
										),
										array(
											'key' => 'field_603992c3a4373',
											'label' => 'Nom du réseau',
											'name' => 'network_name',
											'type' => 'text',
											'instructions' => 'Nom du réseau social (par exemple Facebook, ou Instagram)',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
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
										array(
											'key' => 'field_60399310a4374',
											'label' => 'url de votre réseau social',
											'name' => 'network_link',
											'type' => 'url',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => 'https://facebook.com',
											'placeholder' => '',
										),
									),
								),
							),
						),
 //*/
					),
				),
				
				/*
				array(
					'key' => 'field_603a2df815448',
					'label' => 'Pied de Page',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_603a2b9c2d7d4',
					'label' => 'Pied de Page',
					'name' => 'footer',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_603a2bbd2d7d5',
							'label' => 'Accroche adresse Postale',
							'name' => 'hangout_post_address',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_603a2c432d7d6',
									'label' => 'Icone',
									'name' => 'icon',
									'type' => 'font-awesome',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'icon_sets' => array(
										0 => 'far',
									),
									'custom_icon_set' => '',
									'default_label' => '<i class="fas"></i> map-marked-alt',
									'default_value' => 'fas fa-map-marked-alt',
									'save_format' => 'class',
									'allow_null' => 1,
									'show_preview' => 0,
									'enqueue_fa' => 1,
									'fa_live_preview' => '',
									'choices' => array(
									),
								),
								array(
									'key' => 'field_603a2c7e2d7d7',
									'label' => 'Contenu',
									'name' => 'content',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => 'Nom de la rue 99 à Ville',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => 'br',
								),
							),
						), 
						array(
							'key' => 'field_603a2caa2d7d8',
							'label' => 'Accroche Téléphone',
							'name' => 'hangout_phone',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_603a2caa2d7d9',
									'label' => 'Icone',
									'name' => 'icon',
									'type' => 'font-awesome',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'icon_sets' => array(
										0 => 'far',
									),
									'custom_icon_set' => '',
									'default_label' => '<i class="fas"></i> phone',
									'default_value' => 'fas fa-phone',
									'save_format' => 'class',
									'allow_null' => 1,
									'show_preview' => 0,
									'enqueue_fa' => 1,
									'fa_live_preview' => '',
									'choices' => array(
									),
								),
								array(
									'key' => 'field_603a2caa2d7da',
									'label' => 'Contenu',
									'name' => 'content',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => 'Appellez nous 
                  099/123 45 67',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => 'br',
								),
							),
						),
						array(
							'key' => 'field_603a2d186e016',
							'label' => 'Accroche Email',
							'name' => 'hangout_email',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_603a2d186e017',
									'label' => 'Icone',
									'name' => 'icon',
									'type' => 'font-awesome',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'icon_sets' => array(
										0 => 'far',
									),
									'custom_icon_set' => '',
									'default_label' => '<i class="fas"></i> paper-plane',
									'default_value' => 'fas fa-paper-plane',
									'save_format' => 'class',
									'allow_null' => 0,
									'show_preview' => 0,
									'enqueue_fa' => 0,
									'fa_live_preview' => '',
									'choices' => array(
									),
								),
								array(
									'key' => 'field_603a2d186e018',
									'label' => 'Contenu',
									'name' => 'content',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => 'Email :
                  info@mail.mail',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => 'br',
								),
							),
						),
						array(
							'key' => 'field_603a488f1dff6',
							'label' => 'Colonnes finales',
							'name' => 'columns',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'row',
							'sub_fields' => array(
								array(
									'key' => 'field_603a49131dff7',
									'label' => 'colonne 1',
									'name' => 'column_1',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'layout' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_603a49bffd163',
											'label' => 'Logo',
											'name' => 'logo',
											'type' => 'image',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'maxlength' => '',
											'return_format' => 'array',
											'preview_size' => 'medium',
											'library' => 'all',
											'min_width' => 0,
											'min_height' => 0,
											'min_size' => 0,
											'max_width' => 0,
											'max_height' => 0,
											'max_size' => 0,
											'mime_types' => '',
										),
									),
								),
								array(
									'key' => 'field_603a49471dff8',
									'label' => 'colonne 2',
									'name' => 'column_2',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'layout' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_603a5deb2f886',
											'label' => 'Titre',
											'name' => 'title',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => 'à propos',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'maxlength' => '',
										),
										array(
											'key' => 'field_603a5e0a2f887',
											'label' => 'Contenu',
											'name' => 'content',
											'type' => 'textarea',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => 'Organisation
                      Rue du Lac 100,
                      1234 Ville',
											'placeholder' => '',
											'maxlength' => '',
											'rows' => '',
											'new_lines' => 'br',
										),
									),
								),
								array(
									'key' => 'field_603a6314522cd',
									'label' => 'colonne 3',
									'name' => 'column_3',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'layout' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_603a6314522ce',
											'label' => 'Titre',
											'name' => 'title',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
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
										array(
											'key' => 'field_603a6314522cf',
											'label' => 'Contenu',
											'name' => 'content',
											'type' => 'textarea',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
											'maxlength' => '',
											'rows' => '',
											'new_lines' => 'br',
										),
									),
								),
								array(
									'key' => 'field_603a631f522d0',
									'label' => 'colonne 4',
									'name' => 'column_4',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'layout' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_603a631f522d1',
											'label' => 'Titre',
											'name' => 'title',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => 'Soins',
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'maxlength' => '',
										),
										array(
											'key' => 'field_603a631f522d2',
											'label' => 'Contenu',
											'name' => 'content',
											'type' => 'textarea',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'placeholder' => '',
											'maxlength' => '',
											'rows' => '',
											'new_lines' => 'br',
										),
									),
								),
							),

						),
					),
				),
				//*/
								// popup tab
								array(
									'key' => 'field_6039615218f3f',
									'label' => 'Fenêtre Pop-up',
									'name' => '',
									'type' => 'tab',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'placement' => 'top',
									'endpoint' => 0,
								),
								array(
									'key' => 'field_60395f878bca0',
									'label' => 'Fenetre Pop-up',
									'name' => 'popup_alert',
									'type' => 'group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'layout' => 'block',
									'sub_fields' => array(
										array(
											'key' => 'field_60395fbe8bca1',
											'label' => 'Voulez-vous mettre une alerte pop-up ?',
											'name' => 'alert_condition',
											'type' => 'true_false',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => 0,
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'message' => '',
											'default_value' => 0,
											'ui' => 1,
											'ui_on_text' => 'Oui',
											'ui_off_text' => 'Non',
										),
										array(
											'key' => 'field_603960610eac8',
											'label' => 'Titre de la pop-up',
											'name' => 'popup_title',
											'type' => 'text',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'field_60395fbe8bca1',
														'operator' => '==',
														'value' => '1',
													),
												),
											),
											'wrapper' => array(
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
										array(
											'key' => 'field_603960980eac9',
											'label' => 'Contenu de la pop-up',
											'name' => 'popup_content',
											'type' => 'wysiwyg',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'field_60395fbe8bca1',
														'operator' => '==',
														'value' => '1',
													),
												),
											),
											'wrapper' => array(
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'default_value' => '',
											'tabs' => 'all',
											'toolbar' => 'full',
											'media_upload' => 0,
											'delay' => 0,
										),
									),
								),
								// end popup
				array(
					'key' => 'field_404a2df815448',
					'label' => 'Page 404',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_404a2b9c2d7d4',
					'label' => 'Contenu de la page 404',
					'name' => '404_content_group',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
				    array(
				    	'key' => 'field_404564165e616',
				    	'label' => 'Editeur de contenu',
				    	'name' => 'wysiwyg',
				    	'type' => 'wysiwyg',
				    	'instructions' => '',
				    	'required' => 0,
				    	'conditional_logic' => 0,
				    	'wrapper' => array(
				    		'width' => '',
				    		'class' => '',
				    		'id' => '',
				    	),
				    	'default_value' => '',
				    	'tabs' => 'all',
				    	'toolbar' => 'full',
				    	'media_upload' => 0,
				    	'delay' => 0,
				    ),

					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));
endif;
?>