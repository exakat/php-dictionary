# Sensitive Parameter
This is a native PHP attribute, which tells the engine that a parameter is a sensitive parameter, and should not be displayed by PHP when an error displays the stack trace.

This prevent innocent mistakes, where reading the logs on the production server also tells the actual value of a secret.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sensitiveparameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sensitiveparameter.html","name":"Sensitive Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"This is a native PHP attribute, which tells the engine that a parameter is a sensitive parameter, and should not be displayed by PHP when an error displays the stack trace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Sensitive Parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo(
        #[SensitiveParameter] string $apiKey
    ): int {
        throw new Exception('Could not foo');
    }
    
    foo('abc');
    
    /* The code above displays the following : 
    
    Fatal error: Uncaught Exception: Could not foo in file.php:6
    Stack trace:
    #0 file.php(9): foo(Object(SensitiveParameterValue))
    #1 {main}
      thrown in file.php on line 6
    */

?>
```

**[Documentation](https://www.php.net/manual/en/language.attributes.classes.php)**
## See Also

+ [Sensitive parameters in PHP 8.2](https://flareapp.io/blog/57-sensitive-parameters-in-php-82)

## Related

+ [Attribute](attribute.ini.html)
+ [Security](security.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)
+ [PHP Native Attribute](php-native-attribute.ini.html)
+ [Privacy](privacy.ini.html)
