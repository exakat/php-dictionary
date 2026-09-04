# Class Constants Visibility
Class constant may have a visibility option. This limits their accessibility to the current class, its class hierarchy or any other class. Visibilities for class constants are: private, protected and public.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-visibility.html","name":"Class Constants Visibility","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Class constant may have a visibility option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-visibility.html"]}],"keywords":["visibility"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.visibility.php#language.oop5.visiblity-constants"},{"@type":"CreativeWork","name":"How to add visibility to 338 Class Constants in 25 seconds","url":"https:\/\/tomasvotruba.com\/blog\/how-to-add-visbility-to-338-class-constants-in-25-seconds"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-constant-visibility"}]}]}</script>
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

+ [Visibility](visibility.html)
