---
type: "PHP Feature"
title: "Minification"
description: "Minification is the process to remove elements that are useless in a PHP code, without changing its execution."
resource: "https://en.wikipedia.org/wiki/Minification_(programming)"
tags: ["readability", "optimisation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Minification

Minification is the process to remove elements that are useless in a PHP code, without changing its execution.

For example, whitespaces and comments may be removed from PHP code: it makes the code much smaller, but also, less readable.

Minified code has a smaller footprint on the disk, and may be faster to load, read and process. Minifying has very limited impact on PHP code, and is not considered an optimisation technique.

Minification is applied successfully on HTML, CSS, SVG, XML, JSON, JavaScript, and image formats.

Minification may be used for obfuscation.

Unminify is the contrary of minifying.

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

## Documentation
- [https://en.wikipedia.org/wiki/Minification_(programming)](https://en.wikipedia.org/wiki/Minification_(programming))

## See Also
- [Minify PHP: Should you do it? The Helpful Tools For it?](https://rabbitloader.com/articles/minify-php/)
- [PHP minify](https://php-minify.com/)
- [The State of Minification in PHP – How 1 Project Grew into 6](https://dev.to/hexydec/the-state-of-minification-in-php-how-1-project-grew-into-6-536i)

## Related
- [Obfuscation](/features/obfuscation.md)

## Details
- Packagist: [php-code-minifier/php-code-minifier](https://packagist.org/packages/php-code-minifier/php-code-minifier)

