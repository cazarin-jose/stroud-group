<?php
/**
 *
 * Reset Control
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class WP_Customize_Cs_reset_Control extends WP_Customize_Control {
  public $type  = 'reset';
  public function render_content() {
    echo '<div id="cs-reset-customize">';
    echo '<p class="cs-text-center cs-text-note"><strong>[DANGER]</strong> You are reseting color settings!</p>';
    echo '<p class="cs-text-center"><span class="spinner-scheme hidden"><span class="cs-spinner"></span></span><a href="#" class="button button-primary cs-reset-color">Yes Please, Reset Colors</a></p>';
    echo '</div>';
  }
}

/**
 *
 * Description Control
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class WP_Customize_Cs_description_Control extends WP_Customize_Control {
  public $type  = 'description';
  public function render_content() {
    echo '<p class="cs-customize-desc">'. esc_html( $this->label ) .'</p>';
  }
}

/**
 *
 * Subtitle Control
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class WP_Customize_Cs_subtitle_Control extends WP_Customize_Control {
  public $type  = 'subtitle';
  public function render_content() {
    echo '<div class="cs-custmize-title">'. esc_html( $this->label ) .'</div>';
  }
}


/**
 *
 * Content Control
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class WP_Customize_Cs_content_Control extends WP_Customize_Control {
  public $type  = 'content';
  public function render_content() {
    echo esc_html( $this->label );
  }
}

/**
 *
 * Content Control
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class WP_Customize_Cs_color_Control extends WP_Customize_Control {
  public $type  = 'cs_color';
  public function render_content() {
    echo '<span class="customize-control-title">'. esc_html( $this->label ) .'</span>';
    echo '<div class="customize-control-content cs_field_color_picker">';
    echo '<input type="text" class="cs-color-picker" data-default-color="'. esc_attr( $this->setting->default ) .'" data-customize-setting-link="'. esc_attr( $this->settings['default']->id ) .'" />';
    echo '</div>';
  }
}

function wp_customize_cs_sanitize_callback( $value ) {
  return $value;
}