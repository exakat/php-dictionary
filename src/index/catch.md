# Catch
``catch`` is the complement clause of try. It defines which exception is caught. Optionally, it defines which variable holds the exception when it happens, since PHP 8.0.

Multiple catches may be used. They are applied in the order of writing, and the first clause which succeed is the last. 

It is possible to catch multiple exceptions at the same time: in that case, the second exception is chained.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html","name":"Catch","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 11 Sep 2026 13:41:44 +0000","dateModified":"Fri, 11 Sep 2026 13:41:44 +0000","description":"catch is the complement clause of try","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html"]}],"keywords":["keyword","classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/finally.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-catch.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.exceptions.php"},{"@type":"CreativeWork","name":"Non-capturing exception catches in PHP 8","url":"https:\/\/www.amitmerchant.com\/non-capturing-exception-catches-php8\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.36","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"catch"}]}]}</script>
```php
<?php

    try {
        callSomeMethod();
    } catch (\SomeException $e) {
        display("Warning");
    } catch (\SomeSeriousException $e) {
        display("Alert");
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
+ [Exception](exception.html)
+ [Anonymous Catch](anonymous-catch.html)
