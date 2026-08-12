# Magic Numbers
A magic number is a number that appears in the code, and has no obvious signification. 

It is recommended to make the meaning of that number obvious. This is achieved by using constants, class or global, where the name of the constant improves readability.

Magic numbers also applies to other literal values, such as string, float, arrays. Though, they are more difficult to sort out of the code.

Magic numbers are difficult to categorize, when they are very common across different fields. For example, 0, 1, 2, 10 are very common for different tasks, and may need several disambiguations. Others, such as 60, 404, 1024, are common usage. Finally, there might be business specific numbers, such as 42.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-number.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-number.html","name":"Magic Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A magic number is a number that appears in the code, and has no obvious signification","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Magic Numbers.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-number"}]}]}</script>
```php
<?php

foreach($array as $id => $values) {
    // Only displaying 10 values, but couldn't that limit be parametered?
    if ($id > 10) {
        break;
    }
    
    print $values.PHP_EOL;
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Magic_number_(programming))**
## See Also

+ [What are PHP Magic Numbers, and how to find and remove them](https://medium.com/@yourpropertyexpert/what-are-php-magic-numbers-and-how-to-find-and-remove-them-d47a616261cc)
+ [Replace Magic Number with Symbolic Constant](https://refactoring.guru/replace-magic-number-with-symbolic-constant)

## Related

+ [Constants](constant.html)
+ [Hard Coded](hard-coded.html)
+ [Readability](readability.html)
+ [Code Smell](code-smell.html)
+ [Habit](habit.html)
+ [Magic](magic.html)
+ [one](one.html)

## Related packages

+ [povils/phpmnd](https://packagist.org/packages/povils/phpmnd)
