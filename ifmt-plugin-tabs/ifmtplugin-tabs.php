<?php
/**
 * Plugin Name:       IFMT Tabs + Accordions
 * Plugin URI:        https://ifmt.edu.br
 * Description:       Plugin para habilitar Tab e Accordion 
 * Version:           1.0
 * Author:            IFMT DSTI
 * License:           GPL-2.0-or-later
 * Text Domain:       ifmtplugin-tabs
 *
 * @package           ifmtplugin
 * @since 1.0.0
 */
 
// don't load directly
defined( 'ABSPATH' ) || die( '-1' );

define('ifmtplugin__tabs', TRUE);


add_action( 'init', function () {
    //register_block_type( __DIR__ );
    $tabsRegistered = register_block_type(
        __DIR__,
        array(
            'render_callback' => 'ifmtplugin_tabs_render_callback',
        )
    );
    //if(!$tabsRegistered) die('tabs not registered');
    $tabRegistered = register_block_type(
        'ifmtplugin/tab',
        array(
            'render_callback' => 'ifmtplugin_tab_render_callback',
        )
    );
    //if(!$tabRegistered) die('tab not registered');
} );

function ifmtplugin_tabs_get_themes(){
    return array(
        ''=>'Basic (Default)', 
        'tabby'=>'Tabby', 
        'minimal'=>'Minimal', 
    );
}
function ifmtplugin_tabs_get_layouts(){
    return array( 
        ''=>'Horizontal (Default)', 
        'vertical'=>'Vertical', 
        'accordion'=>'Accordion',
    );
}
function ifmtplugin_tabs_get_htabresponsives(){
    return array(
        ''=>'Collapse to Accordion (Default)', 
        'wrap'=>'Wrap', 
        'none'=>'None',
    );
}
function ifmtplugin_tabs_get_option_definitions(){
    return array(
        'theme'=>array('label'=>'Theme','default'=>'basic', 'options'=>ifmtplugin_tabs_get_themes()), 
        'layout'=>array('label'=>'Layout','default'=>'horizontal', 'options'=>ifmtplugin_tabs_get_layouts()), 
        'htabresponsive'=>array('label'=>'Horizontal Tabs: Responsive Behavior','default'=>'accordion', 'jsKey'=>'hTabResponsive', 'options'=>ifmtplugin_tabs_get_htabresponsives()), 
    );
}
function ifmtplugin_tabs_get_defaults($whichSetting=NULL, $flattenDefaults=TRUE){
    $options = get_option('ifmtplugin_tabs_options');
    $optionDefinitions = ifmtplugin_tabs_get_option_definitions();
    $settings = array();
    foreach($optionDefinitions as $key=>$def){
        if($flattenDefaults){
            if(!(isset($options[$key]) && $options[$key])) $options[$key] = $def['default'];
            if(isset($def['options']) && !in_array($options[$key], array_keys($def['options']) ))  $options[$key] = $def['default'];
        }
        $jsKey = isset($def['jsKey']) ? $def['jsKey'] : $key;
        $settings[$jsKey] = $options[$key];
        if(isset($def['type'])){
            switch($def['type']){
                case 'nullableinteger':
                    $settings[$jsKey] = $settings[$jsKey] ? intval($settings[$jsKey]) : NULL;
                    break;
                case 'integer':
                    $settings[$jsKey] = intval($settings[$jsKey]);
                    break;
                case 'nullableboolean':
                    $settings[$jsKey] = $settings[$jsKey] ? ($settings[$jsKey] === 'true') : NULL;
                    break;
                case 'boolean':
                    $settings[$jsKey] = ($settings[$jsKey] === 'true');
                    break;
            }
        }
    }
    if($whichSetting) return isset($settings[$whichSetting]) ? $settings[$whichSetting] : NULL;
    return $settings;
}
function ifmtplugin_tabs_get_settings(){
    $defaults = ifmtplugin_tabs_get_defaults();
    return array(
        'defaults'=>$defaults
    );
}
function ifmtplugin_tabs_options_validate( $input ) {
    return $input;
    /*
    $newinput['api_key'] = trim( $input['api_key'] );
    if ( ! preg_match( '/^[a-z0-9]{32}$/i', $newinput['api_key'] ) ) {
        $newinput['api_key'] = '';
    }

    return $newinput;*/
}
function ifmtplugin_tabs_settings_text() {
    echo '';
}
function ifmtplugin_tabs_sprint_input($key, $options=NULL, $optionDefinitions=NULL){
    if(!$options) $options = get_option('ifmtplugin_tabs_options');
    if(!$optionDefinitions) $optionDefinitions = ifmtplugin_tabs_get_option_definitions();
    $def = $optionDefinitions[$key];
    $o = '';//$key . ': ';
	$disabled = (isset($def['disabled']) && $def['disabled']) ? ' disabled' : '';
    if(isset($def['hide']) && $def['hide']) return '';
    if(isset($def['readonly']) && $def['readonly']) return esc_html($options[$key]);
    if(isset($def['options'])) {
        $o .= "<select id='ifmtplugin_tabs_setting_" . esc_attr($key) . "' name='ifmtplugin_tabs_options[" . esc_attr($key) . "]' type='text' " . $disabled . ">";
        foreach($def['options'] as $value=>$label){
            $o .= "<option value='" . esc_attr($value) . "' " . (($options[$key] == $value) ? "selected" : ""). ">" . wp_strip_all_tags($label) . '</option>';
        }
        $o .= "</select>";
    }
    else {
        $type = 'text';
        if(isset($def['type'])) {
            switch($def['type']){
                case 'nullableinteger':
                case 'integer':
                    $type = 'number';
                    break;
            }
        }
        $o .= "<input id='ifmtplugin_tabs_setting_" . esc_attr($key) . "' name='ifmtplugin_tabs_options[" . esc_attr($key) . "]' type='" . esc_attr($type) . "' value='" . esc_attr( $options[$key] ) . "' " . $disabled . "/>";
    }
	if(isset($def['pro']) && $def['pro']) $o .= ' <strong> (Pro Only)</strong>';
    return $o;
}
function ifmtplugin_tabs_theme(){
    echo ifmtplugin_tabs_sprint_input('theme');
}
function ifmtplugin_tabs_layout(){
    echo ifmtplugin_tabs_sprint_input('layout');
}
function ifmtplugin_tabs_htabresponsive(){
    echo ifmtplugin_tabs_sprint_input('htabresponsive');
}

function ifmtplugin_tabs_register_settings() {
    register_setting( 'ifmtplugin_tabs_options', 'ifmtplugin_tabs_options', 'ifmtplugin_tabs_options_validate' );
    add_settings_section( 'default_settings', __('Site-Wide Default Settings'), 'ifmtplugin_tabs_settings_text', 'ifmtplugin_tabs' );
    $optionDefinitions = ifmtplugin_tabs_get_option_definitions();
    foreach($optionDefinitions as $key=>$def){
        add_settings_field( 
            'ifmtplugin_tabs_' . $key, $def['label'], 
            'ifmtplugin_tabs_' . $key, 
            'ifmtplugin_tabs', 
            'default_settings', 
            array('label_for'=>'ifmtplugin_tabs_setting_' . $key) );
    }
}
add_action( 'admin_init', 'ifmtplugin_tabs_register_settings' );


function ifmtplugin_tabs_apply_defaults($block_attributes){
    $defaults = ifmtplugin_tabs_get_defaults();
    foreach($defaults as $key=>$defaultValue){
        if(!isset($block_attributes[$key]) || !$block_attributes[$key]) $block_attributes[$key] = $defaultValue;
    }
    return $block_attributes;
}
function ifmtplugin_tab_apply_defaults($block_attributes){
    $defaults = ifmtplugin_tabs_get_defaults(); //TODO: create dedicated 'tab' version of this function, instead of "tabs"
    //$defaults['accordionAutoClose'] = TRUE; //for now...
    $defaults['initialActive'] = FALSE; //for now...
    $defaults['parentLayout'] = $defaults['layout']; //for now...
    foreach($defaults as $key=>$defaultValue){
        if(!isset($block_attributes[$key]) || !$block_attributes[$key]) $block_attributes[$key] = $defaultValue;
    }
    return $block_attributes;
}
function ifmtplugin_tabs_text_to_class($txt){
    if(!$txt) return '';
    $txt = sanitize_title_with_dashes($txt);
    $txt = str_replace('-', '_', $txt);
    $txt = sanitize_html_class($txt);
    return $txt;
}
function ifmtplugin_tabs_generate_anchor($txt){
    if(!$txt) return '';
    $txt = str_replace('<br>', '_', $txt);
    $txt = str_replace('<BR>', '_', $txt);
    $txt = str_replace('<BR/>', '_', $txt);
    return ifmtplugin_tabs_text_to_class($txt);
}
function ifmtplugin_tab_render_callback( $block_attributes, $content ) {
        $block_attributes = ifmtplugin_tab_apply_defaults($block_attributes);
        //$layout = $block_attributes['layout'];
        //$theme = $block_attributes['theme'];
        $parentLayout = $block_attributes['parentLayout'];
        $blockClassNames = '';
        if($parentLayout == 'accordion') {
			$accordionAutoClose = 'true';
			$initialActive = 'false';
			$accordionHeadingLevel = 'h3';
            $label = (isset($block_attributes['label']) && $block_attributes['label']) ? $block_attributes['label'] : __('Tab');
            $anchor = isset($block_attributes['anchor']) ? $block_attributes['anchor'] : null;
            $finalAnchor = $anchor ? $anchor : ifmtplugin_tabs_generate_anchor($label);
            return '<div id="' . $finalAnchor . '" class="pds-accordion__item pds-js-accordion-item pds-no-js" data-initially-open="' . $initialActive . '" data-click-to-close="true" data-auto-close="' . $accordionAutoClose . '" data-scroll="false" data-scroll-offset="0">
                    <' . $accordionHeadingLevel . ' id="at-' . $finalAnchor . '" class="pds-accordion__title pds-js-accordion-controller" role="button">' . $label . '<span class="pds-accordion__icon" role="presentation" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 7.4099998" width=".75rem" height=".75rem"><path d="M12 1.41 10.59 0 6 4.58 1.41 0 0 1.41l6 6z" fill="currentColor"/></svg></span></' . $accordionHeadingLevel .  '>
                    <div id="ac-' . $finalAnchor . '" class="pds-accordion__content">
                        ' . $content . '
                    </div>
                </div>';
        }
        return '<div class="' . $blockClassNames . '"  >' . $content . '</div>';
}
function ifmtplugin_tabs_render_callback( $block_attributes, $content ) {
    //this renders the plugin server side so that we can update the block HTML without having to constantly chase deprecated markup
//var_dump($block_attributes);

    //array ( ‘theme’ => ‘default’, ‘tabLabels’ => array ( 0 => ‘Tab Number 1’, 1 => ‘Tab Number 2’, 2 => ‘Tab Number 3’, 3 => ‘Tab Number 4’, 4 => ‘Tab Number 5’, 5 => ‘Tab Number 6’, ), ‘tabIds’ => array ( 0 => NULL, 1 => NULL, 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL, ), ‘hTabResponsive’ => ‘default’, ‘conditionalBlocksAttributes’ => array ( ), ‘conditionalBlocks’ => array ( ), )

    $block_attributes = ifmtplugin_tabs_apply_defaults($block_attributes);
    $layout = $block_attributes['layout'];
    $theme = $block_attributes['theme'];
    $tabLabels = $block_attributes['tabLabels'];
    $tabIds = $block_attributes['tabIds'];
	$initialActiveTab = 0;
    $hTabResponsive = isset($block_attributes['hTabResponsive']) ? $block_attributes['hTabResponsive'] : '';
    $accordionHeadingLevel = isset($block_attributes['accordionHeadingLevel']) ? $block_attributes['accordionHeadingLevel'] : '';
    $vTabListWidth = isset($block_attributes['vTabListWidth']) ? $block_attributes['vTabListWidth'] : '25%';
    $vTabContentWidth = isset($block_attributes['vTabContentWidth']) ? $block_attributes['vTabContentWidth'] : '75%';
    $className = isset($block_attributes['className']) ? $block_attributes['className'] : '';
    foreach($tabLabels as $k=>$v){
        if(!$v) $tabLabels[$k] = __('Tab') . ' ' . ($k + 1);
    }
    foreach($tabIds as $k=>$v){
        if(!$v) $tabIds[$k] = ifmtplugin_tabs_generate_anchor($tabLabels[$k]);
    }
    $tabListClass = '';
    $tabsContainerClass = $className;
    $contentClass = '';
    $contentStyle = '';
    $tabListStyle = '';
    $cssNS = 'ifmtplugin';
    $themeClass = '';
    if ($theme != 'minimal' && $theme != 'none') $themeClass .= $cssNS . '-theme__minimal ';
    $themeClass .= $cssNS . '-theme__' . $theme . ' ';
    if($layout == 'accordion') {
        $tabsContainerClass .= ' ' . $cssNS . '-accordion ' . $themeClass;
        return '<div >
                    <div class="' . esc_attr($tabsContainerClass) . '"   >
                        <div>
                            ' . $content . '
                        </div>
                    </div>
            </div>';
    };
    $tabLabelClassName = '';
    $tabLabelClassNameActive = '';
    $responsiveBehavior = '';
    $blockAtts = [];
    switch($layout){
        case 'horizontal':
            $tabsContainerClass .= ' '  . $cssNS . '-tabs-container ' . $cssNS . '-tabs-container--horizontal' . ' ' . $themeClass;
            $contentClass = $cssNS . '-tabs--content';
            $tabListClass = $cssNS . '-tabs';
            $tabLabelClassNameActive = 'active';
            $responsiveBehavior = $hTabResponsive;
            break;
        case 'vertical':
            $tabsContainerClass .= ' '  . $cssNS . '-tabs-container ' . $cssNS . '-tabs-container--vertical' . ' ' . $themeClass;
            $contentClass = $cssNS . '-tabs--content ' . $cssNS . '-sidenavjump-content';
            $tabListClass = $cssNS . '-sidenavjump';
            $tabListStyle = 'flex-basis: ' . esc_attr($vTabListWidth);
            $contentStyle = 'flex-basis: ' . esc_attr($vTabContentWidth);
            $tabLabelClassNameActive = 'active';
            break;
    }

    $o =  
    '<div >
        <div class="' . esc_attr($tabsContainerClass) . '" data-' . $cssNS . '-theme="' . esc_attr($theme) . '"  ' . ($responsiveBehavior ? 'data-' . $cssNS . '-responsive="' . esc_attr($responsiveBehavior) . '"' : '') .  '  >
            <div class="' . $tabListClass . '" ' . ($tabListStyle ? 'style="' . $tabListStyle . '"' : '') . ' >
              <ul>';
    foreach($tabLabels as $index=>$label){
                  $o .= '<li>
                        <a 
                                href="#' . $tabIds[$index] . '"
                                class="' . $tabLabelClassName . ((intval($initialActiveTab) == $index) ? ' '  . $tabLabelClassNameActive : '') . '" 
                            >
                            <span>' . $label . '</span>
                        </a>
                    </li>';
    }
              $o .= '</ul>
            </div>
            <div class="' . $contentClass . '" ' . ($contentStyle ? 'style="' . $contentStyle . '"' : '') . '>
                ' . $content . '
            </div>
        </div>
    </div>';
    return $o;
}
  
add_action( 'wp_enqueue_scripts', function () {
    wp_register_script('ifmtplugin_tabs_js', plugins_url('js/tabs.jquery-plugin.js', __FILE__), array('jquery'),'1.0', true);
    wp_enqueue_script('ifmtplugin_tabs_js');
    wp_register_script('ifmtplugin_accordion_js', plugins_url('js/accordion.jquery-plugin.js', __FILE__), array('jquery'),'1.0', true);
    wp_enqueue_script('ifmtplugin_accordion_js');
} ); 


 add_action( 'admin_enqueue_scripts', function(){
//add_action( 'enqueue_block_editor_assets', function(){
//add_action( 'admin_head', function(){
    $script = 'window.ifmtplugin_tabs_settings = ' . json_encode(ifmtplugin_tabs_get_settings()) . ';';
    wp_add_inline_script('ifmtplugin-tabs-editor-script', $script, 'before');
    //echo '<script>' . $script . '</script>';
} );


function ifmtplugin_tabs_render_settings_page(){
    ?>
    <h1>Plethora Tabs + Accordions</h1>
    <h2><?php print __('by') ?> <a href="https://ifmtplugin.com/tabs-accordions/" target="_blank">Plethora Plugins</a></h2>
	<p><a href="https://ifmtplugin.com/tabs-accordions/documentation/" target="_blank"><?php print __('Documentation') ?></a></p>
    <form action="options.php" method="post">
        <?php 
        settings_fields( 'ifmtplugin_tabs_options' );
        do_settings_sections( 'ifmtplugin_tabs' ); ?>
        <input name="submit" class="button button-primary" type="submit" value="<?php esc_attr_e( __('Save') ); ?>" />
    </form>
    <?php

}

add_action( 'admin_menu', function () {
    add_options_page( 'Plethora Tabs + Accordions', 'Tabs + Accordions', 'manage_options', 'ifmtplugin-tabs-settings', 'ifmtplugin_tabs_render_settings_page' );
} );


add_filter("plugin_action_links_" . plugin_basename(__FILE__), function ($links) { 
  $settings_link = '<a href="options-general.php?page=ifmtplugin-tabs-settings">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
} );

add_action('admin_head',  function () {
 ?>
		 <style type="text/css">
			#adminmenu a[href*="ifmtplugin-tabs-settings"] {
				white-space: nowrap;
			}
			#adminmenu a[href*="ifmtplugin-tabs-settings"]::before {
			content: "";
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 124.78678 124.78678'%3E%3Cpath fill='%2372aee6' d='M100.94380209 53.20215898H67.97269467L83.87654218 6.1421274 27.36960191 73.10814514h32.9594733L44.43686181 120.1565426Z'/%3E%3C/svg%3E");
			opacity: .6;
			color: currentColor;
			display: inline-block;
			width: 1.5em;
			height: 1.5em;
			background-repeat: no-repeat;
			margin-right: .2em;
			margin-left: -1em;
			transition: all .2s;
		}
		#adminmenu a[href*="ifmtplugin-tabs-settings"].current::before,
		#adminmenu a[href*="ifmtplugin-tabs-settings"]:focus::before,
		#adminmenu a[href*="ifmtplugin-tabs-settings"]:hover::before {
			opacity: 1;
			margin: 0;
			margin-right: 0.5em;
			transform: scale(1.5);
		}
		#adminmenu a[href*="ifmtplugin-tabs-settings"].current::before {
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 124.78678 124.78678'%3E%3Cpath fill='%23fff' d='M100.94380209 53.20215898H67.97269467L83.87654218 6.1421274 27.36960191 73.10814514h32.9594733L44.43686181 120.1565426Z'/%3E%3C/svg%3E");
		}
	  </style>
	  <?php 
	}
);

