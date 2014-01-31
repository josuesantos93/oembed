<?php
App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'Oembed.Autoload', array('file' => 'Embera' . DS . 'Autoload.php'));

/**
 * Embed Helper
 *
 */
class EmbedHelper extends AppHelper {

/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
	public $helpers = array(
		'Html',
                'Layout',
		'Nodes' => array('className' => 'Nodes.Nodes')
	);

/**
 * Called after LayoutHelper::nodeBody()
 *
 * @return string
 */
	public function afterSetNode() {
                $body = $this->Nodes->field('body');
                $embera = new \Embera\Embera();
                $embera = new \Embera\Formatter($embera);
                $embera->setTemplate('<div class="flex-video">{html}</div>');
                $embed = $embera->transform($body);
                $this->Nodes->field('body', $embed);
	}
}
