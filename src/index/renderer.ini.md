# Renderer
A renderer is an piece of code that applies the rules to produce a target format. For example, rendering an HTML page, javascript, PDF, YAML, etc..
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/renderer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/renderer.ini.html","name":"Renderer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:05:07 +0000","dateModified":"Thu, 09 Jul 2026 09:05:07 +0000","description":"A renderer is an piece of code that applies the rules to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Renderer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Template_processor)**
## Related

+ [Render](render.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
