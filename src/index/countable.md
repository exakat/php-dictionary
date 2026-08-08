# Countable Interface
The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function. 

By implementing the ``Countable`` interface, a class defines custom logic for determining its count.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/countable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/countable.html","name":"Countable Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Countable Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Countable Interface"}]}]}</script>
```php
<?php
class Collection implements Countable
{
    private $list = [];
    
    public function add($x) {
        $this->list[] = $x;
    }

    public function count()
    {
        return $this->count;
    }

}

$count = new Counter;
$count->inc();
$count->inc();

print count($count).PHP_EOL;

?>
```

**[Documentation](https://www.php.net/manual/en/class.countable.php)**
## See Also

+ [Using the count() Function in PHP](https://pimylifeup.com/php-count/)

## Related

+ [count()](count.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [ArrayAccess](arrayaccess.html)
