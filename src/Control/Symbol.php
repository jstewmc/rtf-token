<?php
/**
 * The file for a control symbol
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Control;

/**
 * A control symbol token
 *
 * A control symbol consists of a backslash followed by a single, non-alphabetic 
 * character (aka, a symbol). 
 *
 * A control symbol usually inserts a special character. For example, the control 
 * symbol "\~" represents a non-breaking space.
 * 
 * Generally, control symbols take no delimiters. However, the apostrophe control
 * symbol ("\'") takes a two-digit hexadecimal parameter.
 *
 * @since  0.1.0
 */
class Symbol extends Control
{
	/* !Private properties */
	
	/**
	 * @var    string|null  the control symbol's optional string parameter
	 * @since  0.1.0
	 */
	private $parameter;
	
	/**
	 * @var    string  the control symbol's symbol
	 * @since  0.1.0
	 */
	private $symbol;
	
	
	/* !Magic methods */
	
	/**
	 * Called when the token is constructed
	 *
	 * @param  string  $symbol     the control symbol's symbol character
	 * @param  string  $parameter  the control symbol's parameter
	 * @since  0.1.0
	 */
	public function __construct(string $symbol, string $parameter = null) 
	{
		$this->symbol    = $symbol;
        $this->parameter = $parameter;
	}
	
	/**
	 * Called when the object is treated as a string
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function __toString(): string
	{
        $string = "\\{$this->symbol}{$this->parameter}";
        
		if ($this->isSpaceDelimited) {
			$string .= ' ';
		}
		
		return $string;
	}
	
	
	/* !Get methods */
	
	/**
	 * Gets the token's parameter
	 *
	 * @return  string|null
	 * @since   0.1.0
	 */
	public function getParameter()
	{
		return $this->parameter;
	}
	
	/**
	 * Gets the token's symbol
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function getSymbol(): string
	{
		return $this->symbol;
	}
}
