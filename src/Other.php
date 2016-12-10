<?php
/**
 * The file for an "other" token
 * 
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */
 
namespace Jstewmc\RtfToken;

/**
 * An "other" token
 *
 * An "other" token is any character that isn't a control word, a control symbol, a 
 * group-open, a group-close, or text. Usually, "other" tokens are carriage-returns, 
 * line-feeds, form-feeds, and null characters.
 *
 * @since  0.1.0
 */
class Other extends Token
{
	/* !Private properties */
	
	/**
	 * @var    string  the "other" character
	 * @since  0.1.0
	 */
	private $character;
	
	
	/* !Magic methods */
	
	/**
	 * Called when the token is constructed
	 *
	 * @param  string  $character  the "other" character
	 * @since  0.1.0
	 */
	public function __construct(string $character)
	{
		$this->character = $character;
	}
	
	/**
	 * Called when the token is treated like a string
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function __toString(): string
	{
		return "{$this->character}";
	}
	
	
	/* !Public methods */
	
	/**
	 * Gets the token's character
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function getCharacter(): string
	{
		return $this->character;
	}
}
