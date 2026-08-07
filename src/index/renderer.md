# Renderer
A renderer is an piece of code that applies the rules to produce a target format. For example, rendering an HTML page, javascript, PDF, YAML, etc..
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/renderer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/renderer.html","name":"Renderer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:05:07 +0000","dateModified":"Thu, 09 Jul 2026 09:05:07 +0000","description":"A renderer is an piece of code that applies the rules to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Renderer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Renderer"}]}]}</script>
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

+ [Render](render.html)
+ [Model - View - Controller (MVC)](mvc.html)
