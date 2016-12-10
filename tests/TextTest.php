<?php
/**
 * The file for the text token tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for a text token
 */
class TextTest extends TestCase
{	
    /**
     * __construct() should set the token's properties
     */
    public function testConstruct()
    {
        $text = 'foo';
        
        $token = new Text($text); 
        
        $this->assertEquals($text, $this->getProperty('text', $token));
        
        return;
    }
    
    /**
     * __toString() should return the token's text
     */
    public function testToString()
    {
        $text = 'foo';
        
        $token = new Text('foo');
        
        $this->setProperty('text', $token, $text);
        
        $this->assertEquals($text, (string) $token);
        
        return;
    }
    	
	/**
     * getText() should return the token's text
     */
    public function testGetText()
    {
        $text = 'foo';
        
        $token = new Text('foo');
        
        $this->setProperty('text', $token, $text);
        
        $this->assertEquals($text, $token->getText());
        
        return;
    }
}
