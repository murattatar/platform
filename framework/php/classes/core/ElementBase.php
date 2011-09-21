<?php
/**
 * Abstract base for all elements
 *
 * @package diy.org.cashmusic
 * @author CASH Music
 * @link http://cashmusic.org/
 *
 * Copyright (c) 2011, CASH Music
 * Licensed under the Affero General Public License version 3.
 * See http://www.gnu.org/licenses/agpl-3.0.html
 *
 **/
abstract class ElementBase extends CASHData {
	protected $element_id, $status_uid, $options;
	const type = 'unknown';
	const name = 'Unknown Element';

	abstract public function getMarkup();

	public function __construct($element_id=0,$status_uid=false,$options=false) {
		$this->element_id = $element_id;
		$this->status_uid = $status_uid;
		$this->options = $options;
		$this->primeCache();
	}

	public function getName() {
		return self::name;
	}

	public function getType() {
		return self::type;
	}

} // END class 
?>