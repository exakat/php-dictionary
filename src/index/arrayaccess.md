# ArrayAccess
``ArrayAccess`` is an interface that allows objects to be accessed like arrays using square brackets, similar to accessing elements in a regular array. When a class implements the ``ArrayAccess`` interface, it must provide methods to define how the object behaves when accessed like an array.

+ ``offsetExists($offset)``: this method is called to check if a specific offset exists in the object. It should return a boolean value: ``true`` if the offset exists, ``false`` otherwise.
+ ``offsetGet($offset)``: this method is called to try to retrieve the value associated with a specific offset. It should return the value at that offset.
+ ``offsetSet($offset, $value)``: this method is called to try to set a value for a specific offset. It takes two parameters: the offset and the value to be set.
+ ``offsetUnset($offset)``: this method is called to unset or remove a value associated with a specific offset.

Implementing ``ArrayAccess`` can be useful to create custom data structures or objects that mimic array behavior, providing a convenient and consistent way to work with data.

``ArrayAccess`` is often complemented with ``Countable``, to make the object yet even more like an array.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrayaccess.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrayaccess.html","name":"ArrayAccess","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 10:51:05 +0000","dateModified":"Tue, 04 Aug 2026 10:51:05 +0000","description":"ArrayAccess is an interface that allows objects to be accessed like arrays using square brackets, similar to accessing elements in a regular array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ArrayAccess.html"]}],"keywords":["interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/countable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/associative-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.arrayaccess.php"},{"@type":"CreativeWork","name":"Building Custom Collection class in PHP","url":"https:\/\/medium.com\/@opadaalziede\/building-custom-collection-class-in-php-908f4622efbd"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arrayaccess"}]}]}</script>
```php
<?php

class LimitedArray implements ArrayAccess {
    public $a = 1;
    public $b = 1;
    public $c = 1;

    public function offsetSet($offset, $value): void {
        if (in_array($offset, ['a', 'b', 'c'])) {
            $this->$offset = $value;
        }
        // else ignore
    }

    public function offsetExists($offset): bool {
        return in_array($offset, ['a', 'b', 'c']);
    }

    public function offsetUnset($offset): void {
        // do nothing
    }

    public function offsetGet($offset): mixed {
        if (in_array($offset, ['a', 'b', 'c'])) {
            return $this->$offset;
        }
    }
}

$limitedArray = new LimitedArray();

$limitedArray['a'] = 3;
$limitedArray['d'] = 13;

echo $limitedArray['a']; // 3
echo $limitedArray['d']; // null

?>
```

**[Documentation](https://www.php.net/manual/en/class.arrayaccess.php)**
## See Also

+ [Building Custom Collection class in PHP](https://medium.com/@opadaalziede/building-custom-collection-class-in-php-908f4622efbd)

## Related

+ [Countable Interface](countable.html)
+ [Iterable](iterable.html)
+ [Associative Array](associative-array.html)
+ [PHP Native Interfaces](php-interface.html)
