<?php

class CUMO_HelloWorld extends ET_Builder_Module {

	public $slug       = 'cumo_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'divipulse.com',
		'author'     => 'Divi Pulse',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'cumo-custom-module' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'cumo-custom-module' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'cumo-custom-module' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new CUMO_HelloWorld;
