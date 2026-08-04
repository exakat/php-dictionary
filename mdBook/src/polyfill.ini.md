# Polyfill
A polyfill is a piece of code that provides modern functionality on older browsers or environments that lack support for certain features. Polyfills are used to bridge the gap between the capabilities of modern web standards and the limitations of older browsers that might not fully support those standards.

The term polyfill is a combination of poly, meaning many, and fill, meaning to provide what's missing. Essentially, a polyfill fills in the missing functionality by replicating the behavior of the modern feature using JavaScript or other technologies, allowing developers to write code using modern APIs and standards without worrying about compatibility with older browsers.

There are polyfills for PHP versions, for specific extensions, in case they are not compiled with PHP or component versions.

There are polyfills available in packagist, like the family of packages ``symfony/polyfill-*``, or manually coded in the sources.

Polyfills exist for PHP, but also for any framework. 

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

## See Also

+ [Polyfill Symfony](https://github.com/symfony/polyfill)
+ [Polyfill PHPUnit](https://github.com/Yoast/PHPUnit-Polyfills.git)
+ [PHP and the use of Polyfills](https://roman-huliak.medium.com/php-and-the-use-of-polyfills-3c399b100c7e)
+ [In defense of polyfills](https://lea.verou.me/blog/2026/polyfills/)

Related : [Backward Compatible](Backward Compatible)
