# ISO Flags
The Unicode Consortium has made it possible to convert the two letter region codes (defined in ISO-3166, alpha2) into their flag representation, this library does this for you in PHP.

## Installation
```
$ composer require konfirm/isoflag
```

## Usage
```
$nl1 = Konfirm/ISOFlag/Flag::NL();
$nl2 = new Konfirm/ISOFlag/Flag('NL');
```