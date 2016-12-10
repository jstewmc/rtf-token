<?php
/**
 * The file for a control word token
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Control;

/**
 * A control word token
 *
 * A control word is a specially-formatted command used to perform actions in an
 * RTF document such as: insert special characters, change destination, and set
 * paragraph- or character-formatting. 
 *
 * A control word takes the following form:
 *
 *     \<word>[<delimiter>]
 *
 * The <word> is a string of alphabetic characters. RTF is case-sensitive, and all
 * RTF control words are lowercase. A control word must be shorter than 32
 * characters.
 *
 * The <delimiter> can be one of the following:
 *
 *     A space (" ")
 *         The space is considered part of the control word and does not appear in 
 *         the document. However, any characters following the space, including 
 *         spaces, will appear in the document. 
 *     
 *     A digit or hyphen ("-")
 *         A digit or hyphen indicates a numeric parameter follows. The subsequent
 *         digital sequence is then delimited by a space or any other character 
 *         besides a letter or digit. The parameter can be a positive or negative
 *         number, generally between -32,767 and 32,767. However, readers should
 *         accept any arbitrary string of digits as a legal parameter.
 *
 *     Any character besides a letter or digit
 *         In this case, the delimiting character terminates the control word, but
 *         is not part of the control word.
 *
 * @since      0.1.0
 */
class Word extends Control
{
	/* !Private properties */
	
	/**
	 * @var    int|null  the control word's optional numeric parameter
	 * @since  0.1.0
	 */
	private $parameter;
	
	/**
	 * @var    string  the control word's word
	 * @since  0.1.0
	 */
	private $word;
	

	/* !Magic methods */
	
	/**
	 * Called when the token is constructed
	 *
	 * @param  string  $word       the control word's word
	 * @param  int     $parameter  the control word's parameter (optional)
	 * @since  0.1.0
	 */
	public function __construct(string $word, int $parameter = null) 
	{
		$this->word      = $word;
		$this->parameter = $parameter;
	}
	
	/**
	 * Called when the token is treated as a string
	 * 
	 * @return  string
	 * @since   0.1.0
	 */
	public function __toString(): string
	{
		$string = "\\{$this->word}{$this->parameter}";
		
		if ($this->isSpaceDelimited) {
			$string .= ' ';
		}
		
		return $string;
	}
	
	
	/* !Get methods */
	
	/**
	 * Gets the token's parameter
	 *
	 * @return  int|null
	 * @since   0.1.0
	 */
	public function getParameter()
	{
		return $this->parameter;
	}
	
	/**
	 * Gets the token's word
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function getWord(): string
	{
		return $this->word;
	}
}
