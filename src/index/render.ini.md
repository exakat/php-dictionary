# Render
To render, or renderingm is the action to take a template and its related data, to produce a target format. 

Usually, the rules to render the format are complex: they cannot be reduced to simple commands, so they are collected in an engine, called the renderer.

For example, rendering an HTML page, javascript, PDF, YAML, etc.. 

Rendering is related to templates, formats and optimisation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/render.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/render.ini.html","name":"Render","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:04:51 +0000","dateModified":"Thu, 09 Jul 2026 09:04:51 +0000","description":"To render, or renderingm is the action to take a template and its related data, to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Render.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [View](view.ini.html)
+ [Template](template.ini.html)
+ [Renderer](renderer.ini.html)
+ [RecursiveTreeIterator](recursivetreeiterator.ini.html)

## Related packages

+ [friendsofcake/cakepdf](https://packagist.org/packages/friendsofcake/cakepdf)
