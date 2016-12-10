# rtf-token
Rich Text Format (RTF) tokens.

```php
namespace Jstewmc\RtfToken;

$open    = new Group\Open();
$control = new Control\Word('foo');
$text    = new Text('bar');
$close   = new Group\Close();

echo $open . $control . $text . $close;

```

The example above would output the following:

```
{\foo bar}
```

## Tokens

This library includes tokens for the Rich Text Format (RTF) language including:

* Open-group (i.e., `{`)
* Close-group (i.e., `}`)
* Control word (e.g., `\b`)
* Control symbol (e.g., `\*`)
* Text (e.g., `foo`)
* Other (e.g., `\0`)

The properties of each token differ, but all tokens implement the `_toString()` magic method.

### Group

This library supports two group tokens: `Group\Open` and `Group\Close`. They have no properties:

```php
namespace Jstewmc\RtfToken\Group;

(string) (new Open());   // returns "{"
(string) (new Close());  // returns "}"
```

### Controls

This library supports _word_ and _symbol_ control tokens. 

By default, both tokens are space-delimited. However, this can be turned off using the `setIsSpaceDelimited()` method.

#### Control words

The control word token has a _word_ and (optional) integer _parameter_ property:

```php
namespace Jstewmc\RtfToken\Control;

$word = new Word('b', 0);

$word->getWord();       // returns "b"
$word->getParameter();  // returns 0

(string) $word;  // returns "\b "

$word->setIsSpaceDelimited(false);

(string) $word;  // returns "\b" (note, no space)
```

#### Control symbol

The control symbol token has a _symbol_ and mixed _parameter_ property:

```php
namespace Jstewmc\RtfToken\Control;

$symbol = new Symbol('*', 1);

$symbol->getSymbol();     // returns "*"
$symbol->getParameter();  // returns 1

(string) $symbol;  // returns "\*1 "

$symbol->setIsSpaceDelimited(false);

(string) $symbol;  // returns "\*1"
```

### Text

The text token has a single property, _text_:

```php
namespace Jstewmc\RtfToken;

$text = new Text('foo');

$text->getText();  // returns "foo"

(string) $text;  // returns "foo"
```

### Other

The "other" token exists any character that isn't an _open-group_, _close-group_, _control word_, _control symbol_, or _text_. Usually, this includes special characters like line-feeds ("\n"), carriage-returns ("\r"), etc.

The "other" token has a single property, _character_:

```php
namespace Jstewmc\RtfToken;

$other = new Other("\n");

$other->getCharacter();  // returns "\n"

(string) $other;  // returns "\n"
```

That's about it!

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version

### 0.1.0, December 10, 2016

* Initial release
