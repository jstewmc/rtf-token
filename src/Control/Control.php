<?php
/**
 * The file for a control word or symbol token
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Control;

use Jstewmc\RtfToken\Token;

/**
 * A control word or control symbol token
 *
 * @since  0.1.0
 */
abstract class Control extends Token
{
	/* !Protected properties */
	
	/**
	 * @var  bool  a flag indicating whether or not the control word or symbol is
	 *     space-delimited (e.g., "\foo \bar" versus "\foo\bar"); defaults to true
	 * @since  0.1.0
	 */
	protected $isSpaceDelimited = true;
	
	
	/* !Get methods */
	
	/**
	 * Gets the control's is-space-delimited flag
	 *
	 * @return  bool
	 * @since   0.1.0
	 */
	public function getIsSpaceDelimited(): bool
	{
		return $this->isSpaceDelimited;
	}
	
	
	/* !Set methods */
	
	/**
	 * Sets the control's is-space-delimited flag
	 *
	 * @param  bool  $isSpaceDelimited  a flag indicating whether or not the control
	 *     word or symbol is space-delimited
	 * @return  self
	 * @since   0.1.0
	 */
	public function setIsSpaceDelimited(bool $isSpaceDelimited): self
	{
		$this->isSpaceDelimited = $isSpaceDelimited;
		
		return $this;
	}
	
	
	/* !Public methods */
	
	/**
     * Returns true if the control is space-delimited
     *
     * @return  bool
     * @since   0.1.0
     */
    public function isSpaceDelimited(): bool
    {
        return $this->isSpaceDelimited;
    }
}
