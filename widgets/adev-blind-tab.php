<?php
class Adev_Blind_Tab extends \Elementor\Widget_Base {

	public function get_name() {
		return 'adev-blind-tab';
	}

	public function get_title() {
		return esc_html__( 'Adev Blind Tab', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-ellipsis-h';
	}

	public function get_categories() {
		return [ 'Amador Developer' ];
	}

	public function get_keywords() {
		return [ 'tab', 'step' ];
	}

	protected function render() {
		?>

		<p> Hello World </p>

		<?php
	}
}