<?php
/**
 * The file for an rtf token
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */
 
namespace Jstewmc\RtfToken;

/**
 * An rtf token
 *
 * An rtf token represents an object in the RTF language, for example, a control 
 * word, a control symbol, a group-open, etc.
 *
 * @since  0.1.0
 */
abstract class Token
{
	/* !Magic methods */
	
	/**
	 * Called when the token is treated as a string
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	abstract public function __toString(): string;
}
