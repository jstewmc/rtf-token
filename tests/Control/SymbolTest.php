<?php
/**
 * The file for the control symbol tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\RtfToken\Control;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for a control symbol
 */
class SymbolTest extends TestCase
{	
    /**
     * __construct() should set the token's properties
     */
    public function testConstruct()
    {
        $symbol    = '+';
        $parameter = '1';
        
        $token = new Symbol($symbol, $parameter);
        
        $this->assertEquals($symbol, $this->getProperty('symbol', $token));
        $this->assertEquals($parameter, $this->getProperty('parameter', $token));
        
        return;
    }
    
    /**
     * __toString() should return string if parameter does not exist
     */
    public function testToStringReturnsStringIfParameterDoesNotExist()
    {
        $symbol = '+';
        
        $token = new Symbol('+');
        
        $this->setProperty('symbol', $token, $symbol);
        
        $this->assertEquals("\\{$symbol} ", (string) $token);
        
        return;
    }
    
    /**
     * __toString() should return string if parameter does exist
     */
    public function testToStringReturnsStringIfParameterDoesExist()
    {
        $symbol    = '+';
        $parameter = '1';
        
        $token = new Symbol('+', '1');
        
        $this->setProperty('symbol', $token, $symbol);
        $this->setProperty('parameter', $token, $parameter);
        
        $this->assertEquals("\\{$symbol}{$parameter} ", (string) $token);
        
        return;
    }
    
    /**
     * __toString() should return string if control symbol is not space-delimited
     */
    public function testToStringReturnsStringIfSpaceDelimited()
    {
        $symbol = '+';
        
        $token = new Symbol('+');
        
        $this->setProperty('symbol', $token, $symbol);
        $this->setProperty('isSpaceDelimited', $token, false);
        
        $this->assertEquals("\\{$symbol}", (string) $token);
        
        return;
    }
    
    /**
     * getIsSpaceDelimited() should return bool
     */
    public function testGetIsSpaceDelimited()
    {
        $token = new Symbol('+');
        
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
        
        $token = new Symbol('+');
        
        $this->setProperty('parameter', $token, $parameter);
        
        $this->assertEquals($parameter, $token->getParameter());
        
        return;
    }
    
    /**
     * getSymbol() should return string
     */
    public function testGetSymbol()
    {
        $symbol = '+';
        
        $token = new Symbol('+');
        
        $this->setProperty('symbol', $token, $symbol);
        
        $this->assertEquals($symbol, $token->getSymbol());
        
        return;
    }
    
    /**
     * isSpaceDelimited() should return bool
     */
    public function testIsSpaceDelimited()
    {
        $token = new Symbol('+');
        
        $this->setProperty('isSpaceDelimited', $token, true);
        
        $this->assertTrue($token->isSpaceDelimited());
        
        return; 
    }
 
    /**
     * setIsSpaceDelimited() should return self
     */
    public function testSetIsSpaceDelimited()
    {
        $token = new Symbol('+');
        
        $this->assertSame($token, $token->setIsSpaceDelimited(true));
        $this->assertTrue($this->getProperty('isSpaceDelimited', $token));
        
        return;
    }
}
