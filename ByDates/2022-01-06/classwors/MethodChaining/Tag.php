<?php

class Tag
{
	private $name;

	private $text = [];
	private $attributes = [];

	function __construct(string $name)
	{
		$this->name = $name;
	}

	private function getAttrLine() : string
	{
		$attributes = '';

		foreach ($this->attributes as $attrName => $attrValue) {
			$attributes .= $attrValue ? " {$attrName}=\"$attrValue\"" : (' ' . $attrValue);
		}

		return $attributes;
	}

	public function setText($text)
	{
		$this->text[] = $text;

		return $this;
	}

	public function setAttr($name, $value = NULL)
	{
		$this->attributes[$name] = $value;

		return $this;
	}

	public function get()
	{
		$text = implode(' ', $this->text);

		$attributes = $this->getAttrLine();

		return "<{$this->name}{$attributes}>{$text}</{$this->name}>";
	}

	public function show()
	{
		echo $this->get();
	}
}