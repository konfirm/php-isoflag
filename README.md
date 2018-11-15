# ISO Flags
The Unicode Consortium has made it possible to convert the two letter region codes (defined in ISO-3166, alpha2) into their flag representation, this library does this for you in PHP.

## Installation

```
$ composer require konfirm/isoflag
```

## Usage

```php
<?php 

use Konfirm/ISOFlag/Flag;

$nl1 = Flag('NL');
$nl2 = Flag::NL();
```

## API

###Flag::{iso}()

The static `__callStatic` implementation is used as factory to create new instances. Simply invoke the ISO-3166 alpha2 region code as method name.
These instances are cached and re-used to allow for instance comparison.

```php
<?php 

use Konfirm/ISOFlag/Flag;

$flag = Flag::ES();

if ($flag === Flag::es()) {
	//  both are the exact same instance
}

if ($flag === new Flag('ES')) {
    //  new instances are never fully identical
}

if ($flag == new Flag('ES')) {
    //  they do compare to be similar
}
```

NOTE: instances created using the `new Flag(...)` constructor are _always_ fresh instances.


### Flag::hasFlag(string iso)

The static `hasFlag` method quickly determines whether or not a Flag instance can be created for the specified ISO-3166 alpha2 code.

```php
<?php 

use Konfirm/ISOFlag/Flag;

if (Flag::hasFlag('US')) {
	//  the 'US' region has a flag
}

if (Flag::hasFlag('QQ')) {
	//  this is never reached
} else {
	//  'QQ' is not a valid region :()
}
```

### $flag->toHTMLEntities()

Characters in HTML can be represented by their character index within the unicde standard, ISOFlag provides the hexadecimal notation of these entities.

```php
<?php 

use Konfirm/ISOFlag/Flag;

$flag = new Flag('CH');
$entities = $flag->toHTMLEntities();

// &#x1F1E8;&#x1F1ED;
```

### $flag->toUnicodeSymbol()

Represent the flag as its unicode emoji

```php
<?php 

use Konfirm/ISOFlag/Flag;

$flag = new Flag('DK');
$symbol = $flag->toUnicodeSymbol();

// 🇩🇰
```

### (string) $flag

Flag instances can be turned into string, it is the same as using `toUnicodeSymbol()` on the instance

```php
<?php 

use Konfirm/ISOFlag/Flag;

$flag = new Flag('SE');
$symbol = (string) $flag;

// 🇸🇪
```



## License

MIT License Copyright (c) 2018 Rogier Spieker (Konfirm)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
