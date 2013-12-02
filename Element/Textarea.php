<?php

namespace Formz\Element;

class TextArea extends Basic{

	/**
	 * generate element markup
	 */
	protected function build(){
		// get attributes
		$attributes = $this->attributesToString();

		// get value
		$value = (!$value) ? '' : $this->getValue();
		
		// create markup
		return "<textarea name='{$this->name}' {$attributes}>{$value}</textarea>";
	}
}