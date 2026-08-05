# Option
An option represents a value that may or may not be present. For example, optional values are typically expressed as nullable types ``?type``, default parameter values, or named arguments with defaults.

Some functional libraries introduce an explicit ``Option`` or ``Maybe`` type to avoid null references entirely.

By extension, options are possible alternatives to execute a feature. It may tweak the way it is performed, the format of the result, or any other behavior. Such options often have a default configuration which makes them easy to adopt, until the need for specialisation arise.

Options are sometimes used as synonyms as configuration or directive: this is the case when the option has to be provided and has no default. An initial choice must be done.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/option.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/option.ini.html","name":"Option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:13:50 +0000","dateModified":"Fri, 10 Jul 2026 09:13:50 +0000","description":"An option represents a value that may or may not be present","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Option.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Named Parameters](named-parameter.ini.html)
+ [Default Parameter](default-parameter.ini.html)
+ [Configuration](configuration.ini.html)
+ [Flag](flag.ini.html)
+ [SplSubject](splsubject.ini.html)
