<?php
/**
 * The file for the "other" token tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for the "other" token
 */
class OtherTest extends TestCase
{
	/**
     * __construct() should set the token's properties
     */
    public function testConstruct()
    {
        $character = '*';
        
        $token = new Other($character);
        
        $this->assertEquals($character, $this->getProperty('character', $token));
        
        return;
    }
    
    /**
     * __toString() should return the token's text
     */
    public function testToString()
    {
        $character = '*';
        
        $token = new Other('*');
        
        $this->setProperty('character', $token, $character);
        
        $this->assertEquals($character, (string) $token);
        
        return;
    }
    
    /**
     * getCharacter() should return the token's character
     */
    public function testGetCharacter()
    {
        $character = '*';
        
        $token = new Other('*');
        
        $this->setProperty('character', $token, $character);
        
        $this->assertEquals($character, $token->getCharacter());
        
        return;
    }
}
