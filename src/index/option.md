# Option
An option represents a value that may or may not be present. For example, optional values are typically expressed as nullable types ``?type``, default parameter values, or named arguments with defaults.

Some functional libraries introduce an explicit ``Option`` or ``Maybe`` type to avoid null references entirely.

By extension, options are possible alternatives to execute a feature. It may tweak the way it is performed, the format of the result, or any other behavior. Such options often have a default configuration which makes them easy to adopt, until the need for specialisation arise.

Options are sometimes used as synonyms as configuration or directive: this is the case when the option has to be provided and has no default. An initial choice must be done.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option.html","name":"Option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:30 +0000","dateModified":"Fri, 07 Aug 2026 09:44:30 +0000","description":"An option represents a value that may or may not be present","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Option.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"option"}]}]}</script>
```php
<?php

    // Nullable type: value may be absent
    function findUser(?int $id): ?User {
        if ($id === null) {
            return null;
        }
        return User::find($id);
    }
    
    // Default value as option
    function greet(string $name = 'World'): string {
        return 'Hello, ' . $name;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Option_type)**
## See Also

+ [All the ways to handle null values in PHP](https://www.amitmerchant.com/all-the-ways-to-handle-null-values-in-php/)
+ [PHP Null Coalescing Operator](https://www.phptutorial.net/php-tutorial/php-null-coalescing-operator/)

## Related

+ [Named Parameters](named-parameter.html)
+ [Default Parameter](default-parameter.html)
+ [Configuration](configuration.html)
+ [Flag](flag.html)
+ [SplSubject](splsubject.html)
