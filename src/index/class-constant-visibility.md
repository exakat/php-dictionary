# Class Constants Visibility
Class constant may have a visibility option. This limits their accessibility to the current class, its class hierarchy or any other class. Visibilities for class constants are: private, protected and public.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-constant-visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-constant-visibility.html","name":"Class Constants Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Class constant may have a visibility option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Constants Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    // This class can only be used in x
    private const C1 = 1;

    // This class can only be used in x and y
    protected const C2 = 1;

    // This class can be used in x, y and z
    private const C3 = 1;
}

class y extends x {
    // doSomething()
}

class z {
    // doSomething()
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visiblity-constants)**
## See Also

+ [How to add visibility to 338 Class Constants in 25 seconds](https://tomasvotruba.com/blog/how-to-add-visbility-to-338-class-constants-in-25-seconds)

## Related

+ [Visibility](visibility.ini.html)
