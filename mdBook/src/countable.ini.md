# Countable Interface
The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function. 

By implementing the ``Countable`` interface, a class defines custom logic for determining its count.
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

## See Also

+ [Using the count() Function in PHP](https://pimylifeup.com/php-count/)

Related : [count()](count()), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [ArrayAccess](ArrayAccess)
