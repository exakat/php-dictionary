# Random\\CryptoSafeEngine
``Random\CryptoSafeEngine`` is a marker interface ``Random`` extension. Any ``Random\Engine`` that also implements this interface guarantees cryptographically secure output.

The only built-in engine implementing it is ``Random\Engine\Secure``. Type-hinting against ``CryptoSafeEngine`` enforces that callers provide a secure source of randomness.

``Random\CryptoSafeEngine`` was introduced in version 8.2.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html","name":"Random\\CryptoSafeEngine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:12 +0000","dateModified":"Mon, 13 Jul 2026 18:47:12 +0000","description":"Random\\CryptoSafeEngine is a marker interface Random extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Random\\CryptoSafeEngine.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"random_cryptosafeengine"}]}]}</script>
```php
<?php

    function generateToken(Random\CryptoSafeEngine $engine): string {
        $randomizer = new Random\Randomizer($engine);
        return bin2hex($randomizer->getBytes(16));
    }
    
    $token = generateToken(new Random\Engine\Secure());

?>
```

**[Documentation](https://www.php.net/manual/en/class.random-cryptosafeengine.php)**
## See Also

+ [Random\Engine\Secure](https://www.php.net/manual/en/class.random-engine-secure.php)

## Related

+ [Random](random.html)
+ [Cryptography](cryptography.html)
+ [Interface](interface.html)
+ [Random\\Engine](random_engine.html)
+ [PHP Native Interfaces](php-interface.html)
