---
type: "PHP Feature"
title: "Register Globals"
description: "Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES."
resource: "https://www.mediawiki.org/wiki/Register_globals"
tags: ["removed feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Register Globals

Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES. 

This meant that the initial set of variables in an application was not known, as they would depend on the incoming data. 

Register globals has been removed in version 5.4.

```php
<?php

    // $_GET['foo'] = 'bar';
    
    echo $foo;
    
    // $_GET['_SESSION']['logged'] = '1';
    
?>
```

## Documentation
- [https://www.mediawiki.org/wiki/Register_globals](https://www.mediawiki.org/wiki/Register_globals)

## See Also
- [PHP register-globals is enabled](https://beaglesecurity.com/blog/vulnerability/php-register-globals-enabled.html)

## Related
- [Directives](/features/directive.md)
- [Legacy](/features/legacy.md)

## Details
- PHP until: 5.4

