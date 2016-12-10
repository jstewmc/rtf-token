<?php
/**
 * The file for a close-group token
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Group;

/**
 * A close-group token
 *
 * @since  0.1.0
 */
class Close extends Group
{
	/* !Public methods */
	
	/**
	 * Called when the object is treated as a string
	 *
	 * @return  string
	 * @since   0.1.0
	 */
	public function __toString(): string
	{
		return '}';
	}
}
