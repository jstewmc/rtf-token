<?php
/**
 * The file for the control word tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Control;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for a control word
 */
class WordTest extends TestCase
{	
    /**
     * __construct() should set the token's properties
     */
    public function testConstruct()
    {
        $word      = 'foo';
        $parameter = 1;
        
        $token = new Word($word, $parameter);
        
        $this->assertEquals($word, $this->getProperty('word', $token));
        $this->assertEquals($parameter, $this->getProperty('parameter', $token));
        
        return;
    }
    
    /**
     * __toString() should return string if parameter does not exist
     */
    public function testToStringReturnsStringIfParameterDoesNotExist()
    {
        $word = 'foo';
        
        $token = new Word('foo');
        
        $this->setProperty('word', $token, $word);
        
        $this->assertEquals("\\{$word} ", (string) $token);
        
        return;
    }
    
    /**
     * __toString() should return string if parameter does exist
     */
    public function testToStringReturnsStringIfParameterDoesExist()
    {
        $word      = 'foo';
        $parameter = 1;
        
        $token = new Word('foo', 1);
        
        $this->setProperty('word', $token, $word);
        $this->setProperty('parameter', $token, $parameter);
        
        $this->assertEquals("\\{$word}{$parameter} ", (string) $token);
        
        return;
    }
    
    /**
     * __toString() should return string if control word is not space-delimited
     */
    public function testToStringReturnsStringIfNotSpaceDelimited()
    {
        $word = 'foo';
        
        $token = new Word('foo');
        
        $this->setProperty('word', $token, $word);
        $this->setProperty('isSpaceDelimited', $token, false);
        
        $this->assertEquals("\\{$word}", (string) $token);
        
        return;
    }
    
    /**
     * getIsSpaceDelimited() should return bool
     */
    public function testGetIsSpaceDelimited()
    {
        $token = new Word('foo');
        
        $this->setProperty('isSpaceDelimited', $token, true);
        
        $this->assertTrue($token->getIsSpaceDelimited());
        
        return; 
    }
    
    /**
     * getParameter() should return the token's parameter
     */
    public function testGetParameter()
    {
        $parameter = '1';
        
        $token = new Word('foo', 1);
        
        $this->setProperty('parameter', $token, $parameter);
        
        $this->assertEquals($parameter, $token->getParameter());
        
        return;
    }
    
    /**
     * getWord() should return string
     */
    public function testGetWord()
    {
        $word = 'foo';
        
        $token = new Word('foo');
        
        $this->setProperty('word', $token, $word);
        
        $this->assertEquals($word, $token->getWord());
        
        return;
    }
    
    /**
     * isSpaceDelimited() should return bool
     */
    public function testIsSpaceDelimited()
    {
        $token = new Word('foo');
        
        $this->setProperty('isSpaceDelimited', $token, true);
        
        $this->assertTrue($token->isSpaceDelimited());
        
        return; 
    }
 
    /**
     * setIsSpaceDelimited() should return self
     */
    public function testSetIsSpaceDelimited()
    {
        $token = new Word('foo');
        
        $this->assertSame($token, $token->setIsSpaceDelimited(true));
        $this->assertTrue($this->getProperty('isSpaceDelimited', $token));
        
        return;
    }
}
