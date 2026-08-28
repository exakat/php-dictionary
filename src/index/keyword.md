# Keyword
PHP has a list of keywords, which are also called reserved names. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class constant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/keyword.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/keyword.html","name":"Keyword","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:46:43 +0000","dateModified":"Thu, 20 Aug 2026 08:46:43 +0000","description":"PHP has a list of keywords, which are also called reserved names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/keyword.html"]}],"alternateName":["php-keyword"],"keywords":["syntax","confusion","_arrayOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reserved-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/and.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.keywords.php"},{"@type":"CreativeWork","name":"List of other reserved words","url":"https:\/\/www.php.net\/manual\/en\/reserved.other-reserved-words.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"keyword"}]}]}</script>
```php
<?php

    class MyNamespace {
        function array() {
            return array();
        }
    }
    
    print_r((new myNamespace)->array());
    
    class X {
        const array ARRAY = array(); // possible confusion here
    }

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.keywords.php)**
## See Also

+ [List of other reserved words](https://www.php.net/manual/en/reserved.other-reserved-words.php)

## Related

+ [Reserved Names](reserved-name.html)
+ [And Operator](and.html)
+ [Self](self.html)
