<?php
/**
 * The file for the close-group token tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Group;

use Jstewmc\TestCase\TestCase;

/**
 * Test for the close-group token
 */
class CloseTest extends TestCase
{
	/**
	 * __toString() should return string
	 */
	public function testToString()
	{
		$this->assertEquals('}', (string) new Close());
		
		return;
	}
}
