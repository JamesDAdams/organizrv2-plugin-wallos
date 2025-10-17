<?php

$GLOBALS['plugins']['Wallos'] = array( // Plugin Name
	'name' => 'Wallos', // Plugin Name
	'author' => 'JamesAdams', // Who wrote the plugin
	'category' => 'Utilities', // One to Two Word Description
	'link' => '', // Link to plugin info
	'license' => 'personal', // License Type use , for multiple
	'idPrefix' => 'WALLOS', // html element id prefix (All Uppercase)
	'configPrefix' => 'WALLOS', // config file prefix for array items without the hypen (All Uppercase)
	'version' => '1.0.0', // SemVer of plugin
	'image' => 'data/plugins/stripe/logo.png', // 1:1 non transparent image for plugin
	'settings' => true, // does plugin need a settings modal?
	'bind' => true, // use default bind to make settings page - true or false
	'api' => 'api/v2/plugins/stripe/settings', // api route for settings page (All Lowercase)
	'homepage' => true // Is plugin for use on homepage? true or false
);

class WallosPlugin extends Organizr  {

    public function __construct() {
        // Hook pour ajouter à la homepage
        add_hook('homepage', [$this, 'addHomepageElement']);
    }

    public function addHomepageElement() {
        // Affiche un bloc HTML sur la homepage
        echo '<div class="wallos-homepage-element" style="padding:20px; background:#f5f5f5; border-radius:8px; margin-bottom:20px;">
                <h2>Bienvenue sur WallOS !</h2>
                <p>Votre plugin personnalisé est bien installé.</p>
              </div>';
    }
}