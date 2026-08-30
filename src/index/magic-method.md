# Magic Methods
Special methods, which provide extended support for PHP features.

The magic methods are: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

The constructor and destructor are not considered as magic methods, even though they are reserved.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html","name":"Magic Methods","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:43 +0000","dateModified":"Wed, 19 Aug 2026 06:47:43 +0000","description":"Special methods, which provide extended support for PHP features","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"]}],"alternateName":["magicmethod"],"keywords":["feature","method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__sleep.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__wakeup.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__tostring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set_state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deep-clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-hook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shallow-clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__callstatic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invoke.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overloading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automagic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"},{"@type":"CreativeWork","name":"What are magic methods in PHP? and How to Implement them?","url":"https:\/\/www.edureka.co\/blog\/magic-methods-in-php"},{"@type":"CreativeWork","name":"PHP Magic Methods Explained","url":"https:\/\/atakde.medium.com\/php-magic-methods-explained-bac7053c007d"},{"@type":"CreativeWork","name":"Magic Methods in PHP: Why Programmers Need Magic Too","url":"https:\/\/dev.to\/ianpatricck\/magic-methods-in-php-why-programmers-need-magic-too-2f02"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-method"}]}]}</script>
```php
<?php

class X {
    function __get($name) {
        return $this->$name;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## See Also

+ [What are magic methods in PHP? and How to Implement them?](https://www.edureka.co/blog/magic-methods-in-php)
+ [PHP Magic Methods Explained](https://atakde.medium.com/php-magic-methods-explained-bac7053c007d)
+ [Magic Methods in PHP: Why Programmers Need Magic Too](https://dev.to/ianpatricck/magic-methods-in-php-why-programmers-need-magic-too-2f02)

## Related

+ [\_\_get() Method](__get.html)
+ [\_\_set() Method](__set.html)
+ [\_\_call() Method](__call.html)
+ [\_\_isset() Method](__isset.html)
+ [\_\_clone() Method](__clone.html)
+ [\_\_sleep() Method](__sleep.html)
+ [\_\_wakeup() Method](__wakeup.html)
+ [\_\_toString() Method](__tostring.html)
+ [\_\_invoke() Method](__invoke.html)
+ [\_\_set\_state() Method](__set_state.html)
+ [Dynamic Properties](dynamic-property.html)
+ [String](string.html)
+ [Deep Clone](deep-clone.html)
+ [Isset](isset.html)
+ [Magic Constants](magic-constant.html)
+ [Magic](magic.html)
+ [Object](object.html)
+ [Property Hook](property-hook.html)
+ [Shallow Clone](shallow-clone.html)
+ [\_\_callStatic() Method](__callstatic.html)
+ [Invoke](invoke.html)
+ [Object Type](object-type.html)
+ [Overloading](overloading.html)
+ [Automagic](automagic.html)
+ [Callbacks](callback.html)
