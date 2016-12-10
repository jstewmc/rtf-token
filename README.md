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

This library includes tokens for the Rich Text Format (RTF) language including:

* Open-group (i.e., `{`)
* Close-group (i.e., `}`)
* Control word (e.g., `\b`)
* Control symbol (e.g., `\*`)
* Text (e.g., `foo`)
* Other (e.g., `\0`)

That's about it!

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version

### 0.1.0, December 10, 2016

* Initial release
