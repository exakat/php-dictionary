# Render
To render, or renderingm is the action to take a template and its related data, to produce a target format. 

Usually, the rules to render the format are complex: they cannot be reduced to simple commands, so they are collected in an engine, called the renderer.

For example, rendering an HTML page, javascript, PDF, YAML, etc.. 

Rendering is related to templates, formats and optimisation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html","name":"Render","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:04:51 +0000","dateModified":"Thu, 09 Jul 2026 09:04:51 +0000","description":"To render, or renderingm is the action to take a template and its related data, to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Render.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Render"}]}]}</script>
```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Rendering_(computer_graphics))**
## Related

+ [View](view.html)
+ [Template](template.html)
+ [Renderer](renderer.html)
+ [RecursiveTreeIterator](recursivetreeiterator.html)

## Related packages

+ [friendsofcake/cakepdf](https://packagist.org/packages/friendsofcake/cakepdf)
