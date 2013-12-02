<?php

namespace Formz\Element;

abstract class Element {

	// Basic field attributes
	public $attributes = array();

	/**
	 * render form element
	 *
	 * @param show true|false - output directly to screen instead of returning (false = default)
	 * @return form markup 
	 */
	public function render($show = false){
		$markup = $this->build();

		// If show is true, output html
		if($show) echo $markup;

		return $markup;
	}

	/**
	 * set attributes value (can be overwritten by Form::populate();)
	 *
	 * @param $attrs array of attributes ('id'=>'bla')
	 * @return FormElement
	 */
	public function attributes($attrs = array()){
		$this->attributes = $attrs;
		return $this;
	}

	/**
	 * generate element markup
	 */
	protected function build(){
		return "";
	}

	/**
	 * Convert attributes to string
	 */
	protected function attributesToString(){
		$string = '';

		foreach($this->attributes as $key => $value){
			$string .=" {$key}='{$value}'";
		}

		return $string;
	}

}