<?php
/**
 * Routes
 *
 * example_routes.php will be loaded in main app/config/routes.php file.
 */
//Croogo::hookRoutes('oEmbed');

/**
 * Behavior
 *
 * This plugin's Example behavior will be attached whenever Node model is loaded.
 */
//Croogo::hookBehavior('Node', 'oEmbed.oEmbed', array());

/**
 * Component
 *
 * This plugin's Example component will be loaded in ALL controllers.
 */
//Croogo::hookComponent('*', 'oEmbed.oEmbed');

/**
 * Helper
 *
 * This plugin's Example helper will be loaded via NodesController.
 */
Croogo::hookHelper('Nodes', 'Oembed.Embed');