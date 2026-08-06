# Relaxed Syntax
Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions. 

In particular, keywords are allowed for class constants and methods, while they are forbidden for global constants and functions. 

Note that using PHP keywords for method names may bring confusion to the next code reader.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relaxed-syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relaxed-syntax.html","name":"Relaxed Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:03 +0000","dateModified":"Fri, 19 Jun 2026 21:30:03 +0000","description":"Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Relaxed Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// That is not possible, as array is already reserved
// function array() {}
// const array = [];

class x {
      function array() { return [1]; }
    const array = [2];

    function foo() {
        // This is not a syntax that is expected
        return $this->array() + self::array;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/migration70.other-changes.php)**
## See Also

+ [Loosening Reserved Word Restrictions](https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words)

## Related

+ [Naming](naming.ini.html)
