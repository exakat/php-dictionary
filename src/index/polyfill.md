# Polyfill
A polyfill is a piece of code that provides modern functionality on older browsers or environments that lack support for certain features. Polyfills are used to bridge the gap between the capabilities of modern web standards and the limitations of older browsers that might not fully support those standards.

The term polyfill is a combination of poly, meaning many, and fill, meaning to provide what's missing. Essentially, a polyfill fills in the missing functionality by replicating the behavior of the modern feature using JavaScript or other technologies, allowing developers to write code using modern APIs and standards without worrying about compatibility with older browsers.

There are polyfills for PHP versions, for specific extensions, in case they are not compiled with PHP or component versions.

There are polyfills available in packagist, like the family of packages ``symfony/polyfill-*``, or manually coded in the sources.

Polyfills exist for PHP, but also for any framework. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polyfill.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polyfill.html","name":"Polyfill","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:25:03 +0000","dateModified":"Mon, 13 Jul 2026 18:25:03 +0000","description":"A polyfill is a piece of code that provides modern functionality on older browsers or environments that lack support for certain features","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polyfill.html"]}],"keywords":["compatibility"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-compatible.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/symfony.com\/components\/Polyfill%20PHP%208.0"},{"@type":"CreativeWork","name":"Polyfill Symfony","url":"https:\/\/github.com\/symfony\/polyfill"},{"@type":"CreativeWork","name":"Polyfill PHPUnit","url":"https:\/\/github.com\/Yoast\/PHPUnit-Polyfills.git"},{"@type":"CreativeWork","name":"PHP and the use of Polyfills","url":"https:\/\/roman-huliak.medium.com\/php-and-the-use-of-polyfills-3c399b100c7e"},{"@type":"CreativeWork","name":"In defense of polyfills","url":"https:\/\/lea.verou.me\/blog\/2026\/polyfills\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"polyfill"}]}]}</script>
```php
<?php

    // hand-made polyfill
    if (!function_exists('str_contains')) {
        function str_contains(string $a, string $b) : bool {
            return substr($a, $b) !== false;
        }
    }

?>
```

**[Documentation](https://symfony.com/components/Polyfill%20PHP%208.0)**
## See Also

+ [Polyfill Symfony](https://github.com/symfony/polyfill)
+ [Polyfill PHPUnit](https://github.com/Yoast/PHPUnit-Polyfills.git)
+ [PHP and the use of Polyfills](https://roman-huliak.medium.com/php-and-the-use-of-polyfills-3c399b100c7e)
+ [In defense of polyfills](https://lea.verou.me/blog/2026/polyfills/)

## Related

+ [Backward Compatible](backward-compatible.html)

## Related packages

+ [symfony/polyfill-php83](https://packagist.org/packages/symfony/polyfill-php83)
+ [paragonie/random_compat](https://packagist.org/packages/paragonie/random_compat)
+ [guzzlehttp/uri-template](https://packagist.org/packages/guzzlehttp/uri-template)
+ [yoast/phpunit-polyfills](https://packagist.org/packages/yoast/phpunit-polyfills)
