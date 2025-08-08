<?php
defined('MOODLE_INTERNAL') || die();

function theme_modern_get_main_scss_content($theme) {
    // Cargar el SCSS base de Boost
    $boostscss = theme_boost_get_main_scss_content($theme);
    
    // Cargar tu SCSS personalizado
   $customscss = file_get_contents(__DIR__ . '/scss/preset/preset.scss');

    
    // Retornar ambos concatenados
    return $boostscss . "\n" . $customscss;
}
