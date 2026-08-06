# Countable Interface
The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function. 

By implementing the ``Countable`` interface, a class defines custom logic for determining its count.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/countable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/countable.html","name":"Countable Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:31:37 +0000","dateModified":"Tue, 16 Jun 2026 15:31:37 +0000","description":"The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Countable Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [count()](count.ini.html)
+ [Interface](interface.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [ArrayAccess](arrayaccess.ini.html)
