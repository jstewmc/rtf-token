<?php
/**
 * The file for a plain-text token
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken;

/**
 * A plain-text token
 *
 * Everything that isn't a group-open, group-close, control word, control symbol or
 * "other" character is plain-text. Keep in mind, special characters (i.e., "\", "{", 
 * and "}") MUST be escaped with a backslash ("\"). 
 *
 * @since  0.1.0
 */
class Text extends Token
{
	/* !Private properties */
	
	/**
	 * @var    string  the token's text
	 * @since  0.1.0
	 */
	private $text;	
	
	
	/* !Magic methods */
	
	/**
	 * Called when the token is constructed
	 *
	 * @param  string  $text  the token's text
	 * @since  0.1.0
	 */
	public function __construct(string $text)
	{
		$this->text = $text;
	}
	
	/**
	 * Called when the token is treated as a string
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function __toString(): string
	{
		return "{$this->text}";
	}
	
	
	/* !Get methods */
	
	/**
	 * Gets the token's text
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function getText(): string
	{
		return $this->text;
	}
}
