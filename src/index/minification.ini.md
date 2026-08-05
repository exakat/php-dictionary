# Minification
Minification is the process to remove elements that are useless in a PHP code, without changing its execution.

For example, whitespaces and comments may be removed from PHP code: it makes the code much smaller, but also, less readable.

Minified code has a smaller footprint on the disk, and may be faster to load, read and process. Minifiynig has very limited impact on PHP code, and is not considered an optimisation technic. 

Minification is applied successfully on HTML, CSS, SVG, XML, JSON, Javascript, and image formats.

Minification may be used for obfuscation.

Unminify is the contrary to minify.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/minification.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/minification.ini.html","name":"Minification","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:54:27 +0000","dateModified":"Sat, 11 Jul 2026 14:54:27 +0000","description":"Minification is the process to remove elements that are useless in a PHP code, without changing its execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Minification.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // minified version
    for($i=0; $i<10;++$i) { print "$i\n";}
    
    // minified version
    for($i = 0; $i < 10; ++$i) {
        // This displays a number
        print "$i\n";
    }
    
    // structure that cannot be minified
    echo 1 . 2; // displays 12 
    echo 1.2; // displays 1.2 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Minification_(programming))**
## See Also

+ [Minify PHP: Should you do it? The Helpful Tools For it?](https://rabbitloader.com/articles/minify-php/)
+ [PHP minify](https://php-minify.com/)
+ [The State of Minification in PHP – How 1 Project Grew into 6](https://dev.to/hexydec/the-state-of-minification-in-php-how-1-project-grew-into-6-536i)

## Related

+ [Obfuscation](obfuscation.ini.html)

## Related packages

+ [php-code-minifier/php-code-minifier](https://packagist.org/packages/php-code-minifier/php-code-minifier)
