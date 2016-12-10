<?php
/**
 * The file for a group token
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Group;

use Jstewmc\RtfToken\Token;

/**
 * A group token
 *
 * A group token indicates the opening or closing of a group. A group is text, 
 * control words, or control symbols enclosed in brackets ("{" and "}"). The opening 
 * brace indicates the start of a group and the closing brace indicates the end of a 
 * group.
 *
 * @since  0.1.0
 */
abstract class Group extends Token
{
	// nothing yet
}
