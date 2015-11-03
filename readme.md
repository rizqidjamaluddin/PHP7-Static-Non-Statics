# PHP 7 Compatibility Trait

>_Reclaim your static non-statics!_

As of PHP 7, users can no longer call non-static methods in a static context. This is an absolute tragedy for everyone who wishes to use strange workarounds out of pure laziness. Hence, this package aims to remedy the severe problem by allowing you to simply use a trait to get around it! The trait itself uses the `__callStatic()` magic method, so you'll be golden for as long as the magic methods are around!

## Installation

This project is available via Composer, so simply do

```
composer require phroggyy/php7compatibility dev-master;
```

to pull it in.

## Usage

Reclaiming your rights is incredibly easy. In whichever class you wish, simply

```
use \Phroggyy\Utilities\Php7Compatibility;
```

And you're ready to roll!

## Disclaimer

Yes, this is obviously a joke. Please don't use this package for anything useful.