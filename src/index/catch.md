# Catch
``catch`` is the complement clause of try: it defines which exception is caught. Optionally, it defines which variable holds the exception when it happens, since PHP 8.0.

Multiple catches may be used. They are applied in the order of coding, and the first clause which succeed is the last.

``catch`` does not check that the caught exception exists: it just checks that the raised exception match the class name, or its interface. If a typo happens in the class name or the class does not exists, the clause fails every time.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html","name":"Catch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"catch is the complement clause of try: it defines which exception is caught","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Catch.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"catch"}]}]}</script>
```php
<?php

    try {
        callSomeMethod();
    } catch (\SomeException $e) {
        display("Warning");
    } catch (\SomeSeriousException $e) {
        display("Alert");
    } catch (\UndefinedException $e) {
        die('This never happens');
    } catch (\Exception) {
        // process the error here
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.exceptions.php)**
## See Also

+ [Non-capturing exception catches in PHP 8](https://www.amitmerchant.com/non-capturing-exception-catches-php8/)

## Related

+ [Try-catch](try-catch.html)
+ [Finally](finally.html)
+ [Throwable](throwable.html)
+ [Anonymous Catch](anonymous-catch.html)
