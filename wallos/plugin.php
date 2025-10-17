<?php
/*
Plugin Name: WallOS Homepage Element
Plugin Version: 1.0
Plugin Author: James Adams
Plugin Description: Ajoute un élément personnalisé à la homepage Organizr.
Plugin Homepage: https://github.com/jamesadams/wallos-homepage
*/

class WallOS_Homepage_Plugin {
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

// Initialisation du plugin
new WallOS_Homepage_Plugin();
