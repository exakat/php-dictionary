# Null Pattern
The Null Pattern is a design pattern in software development that addresses the handling of null or undefined values in a more controlled and predictable manner. It is also known as the Null Object Pattern.

In many programming languages, including PHP, ``null`` is often used to indicate the absence of a value or an error condition. However, using ``null`` can lead to unexpected errors or code complexity when developers forget to check for null before using a variable, leading to runtime exceptions or bugs.

The Null Pattern suggests creating a special object to represent the absence of a value instead of using null. This object behaves like a regular object but has default or ``null`` behavior, making it safe to use without explicit null checks.

Key principles of the Null Pattern:

+ Null Object: create a specific class that implements a common interface for the objects in question. This class represents the null state and provides default, empty, or no-op implementations of the interface's methods.
+ No Null Checks: instead of checking for ``null`` before using an object, it is safe to call methods on the Null Object, knowing that it won't throw exceptions or cause errors. This simplifies the code and avoids conditional logic based on ``null`` checks, although it may replace such checks with a call to ``instanceof`` to identify the Null Object.
+ Transparency: code that interacts with the Null Object should treat it like any other object without needing to handle special cases for ``null``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullpattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullpattern.html","name":"Null Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The Null Pattern is a design pattern in software development that addresses the handling of null or undefined values in a more controlled and predictable manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Null Pattern.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nullpattern"}]}]}</script>
```php
<?php

    interface Logger {
        public function log($message);
    }
    
    class FileLogger implements Logger {
        public function log($message) {
            // Log the message to a file
        }
    }
    
    class NullLogger implements Logger {
        public function log($message) {
            // Do nothing (null behavior)
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Null_object_pattern)**
## See Also

+ [The Null Object Pattern: Simplify Your PHP Code](https://jorgecortes.dev/blog/10-the-null-object-pattern-simplify-your-php-code)
+ [All the ways to handle null values in PHP](https://www.amitmerchant.com/all-the-ways-to-handle-null-values-in-php/)

## Related

+ [Pattern](pattern.html)
+ [Default Parameter](default-parameter.html)
+ [Default Value](default-value.html)
+ [Neutral Element](neutral-element.html)
+ [Null](null.html)
