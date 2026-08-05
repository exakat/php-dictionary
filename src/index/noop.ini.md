# Noop
A noop, or no operation, is a command that does nothing. No-op may be an empty expression, or even entirely omitted. 

``echo`` an empty string is also a noop: it displays a string, which is empty so has no impact on the output. The entire command may be ignored.

Neutral operation such as ``+ 0`` or ``. ''`` are noops, but they include a silent cast to integer or string, which may have a larger impact on the other values of the operation.

No operation are often considered as useless. Noop are sometimes needed where an operation is needed, but, contextually, should be neutral.

This is distinct, though close, to the identity: identity returns the incoming data, doing nothing with it. Yet, it still returns something.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/noop.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/noop.ini.html","name":"Noop","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A noop, or no operation, is a command that does nothing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Noop.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// empty expressions: noops
$a = 1;;;

switch($m) {
    case 1:
     // silent no op here
     // but fallthrough
     
    case 2: 
        $b = 3;
}

while (false);

echo '';

$x = 'abc'.'';

'lone string';

?>
```

**[Documentation](https://en.wikipedia.org/wiki/NOP_(code))**
## See Also

+ [eio_nop](https://www.php.net/manual/en/function.eio-nop.php)
+ [Noop polyfills](https://backendtea.com/post/noop-polyfill/)

## Related

+ [Useless](useless.ini.html)
+ [Identity](identity.ini.html)
