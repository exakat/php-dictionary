# Pseudo-variable
A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one. Instead, it is a special case that has a specific meaning within its context. ``$this`` is the only pseudo-variable: it represents the object that is called.
```php
<?php

    class X {
        private string $name;
        
        function __construct($name) {
            $this->name = $name;
        }
        
        function foo() {
            // $this represents any object of type x
            print $this->name;
        }
    }
    
    // $a represents only the object 'a', type x, until it is reassigned
    $a = new x('a');
    
    // $b represents only the object 'b', type x, until it is reassigned
    $b = new x('b');

?>
```

Related : [Variables](Variables)
