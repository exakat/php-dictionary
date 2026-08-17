# Noop
A noop, or no operation, is a command that does nothing. No-op may be an empty expression, or even entirely omitted. 

``echo`` an empty string is also a noop: it displays a string, which is empty so has no impact on the output. The entire command may be ignored.

Neutral operations such as ``+ 0`` or ``. ''`` are noops, but they include a silent cast to integer or string, which may have a larger impact on the other values of the operation.

No operations are often considered as useless. Noops are sometimes needed where an operation is needed, but, contextually, should be neutral.

This is distinct, though close, to the identity: identity returns the incoming data, doing nothing with it. Yet, it still returns something.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/noop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/noop.html","name":"Noop","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:35:17 +0000","dateModified":"Sat, 08 Aug 2026 14:35:17 +0000","description":"A noop, or no operation, is a command that does nothing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Noop.html"]}],"alternateName":["no-operation"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/useless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/NOP_(code)"},{"@type":"CreativeWork","name":"eio_nop","url":"https:\/\/www.php.net\/manual\/en\/function.eio-nop.php"},{"@type":"CreativeWork","name":"Noop polyfills","url":"https:\/\/backendtea.com\/post\/noop-polyfill\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"noop"}]}]}</script>
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

+ [Useless](useless.html)
+ [Identity](identity.html)
