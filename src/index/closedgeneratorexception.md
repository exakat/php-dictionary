# ClosedGeneratorException
A ``ClosedGeneratorException`` is an exception that occurs when the code tries to perform an operation on a generator that has already been closed. Generators iterates over a set of values without needing to create an array to hold all the values in memory at once.

Once a generator is closed, it cannot be used for further iteration. Any attempt to use methods like ``next()``, ``send()``, or ``throw()`` on a closed generator throws a ``ClosedGeneratorException``, to indicate that the generator is no longer available for iteration.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closedgeneratorexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closedgeneratorexception.html","name":"ClosedGeneratorException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:32:16 +0000","dateModified":"Sun, 28 Jun 2026 10:32:16 +0000","description":"A ClosedGeneratorException is an exception that occurs when the code tries to perform an operation on a generator that has already been closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closedgeneratorexception.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreach.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.closedgeneratorexception.php"},{"@type":"CreativeWork","name":"Explaining the ClosedGeneratorException in PHP","url":"https:\/\/gist.github.com\/Potherca\/a74a14e698158d927f9d32c4b5f4e303"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"closedgeneratorexception"}]}]}</script>
```php
<?php

// Code example from Ben Peachey (see external links)
// Adapted for presentation purposes

class CustomException extends Exception {}

function from() {
    yield 1;
    throw new CustomException();
}

function gen($gen) {
    yield from $gen;
}

$gen = from();
$gens[] = gen($gen);
$gens[] = gen($gen);

foreach ($gens as $g) {
    $g->current(); // init.
}

foreach ($gens as $i => $g) {
    try {
        $g->current();
        $g->next();
    } catch (\ClosedGeneratorException $e) {
        print 'Caught ClosedGeneratorException'.PHP_EOL;
    } catch (\Exception $e) {
        print 'Caught Generic Exception'.PHP_EOL;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.closedgeneratorexception.php)**
## See Also

+ [Explaining the ClosedGeneratorException in PHP](https://gist.github.com/Potherca/a74a14e698158d927f9d32c4b5f4e303)

## Related

+ [Generator](generator.html)
+ [foreach()](foreach.html)
