# Render
To render, or rendering, is the action of taking a template and its related data to produce a target format.

Usually, the rules to render the format are complex: they cannot be reduced to simple commands, so they are collected in an engine, called the renderer.

For example, rendering an HTML page, JavaScript, PDF, YAML, etc.

Rendering is related to templates, formats and optimisation.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html","name":"Render","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:17 +0000","dateModified":"Wed, 19 Aug 2026 06:47:17 +0000","description":"To render, or rendering, is the action of taking a template and its related data to produce a target format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html"]}],"alternateName":["rendering"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/renderer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Rendering_(computer_graphics)"},{"@type":"CreativeWork","name":"Model-view-controller","url":"https:\/\/en.wikipedia.org\/wiki\/Model%E2%80%93view%E2%80%93controller"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"render"}]}]}</script>
```php
<?php

    $name = "elephpant";
    $template = "Hello NAME";
    
    // very simple rendering
    
    echo str_replace('NAME', $name, $template);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Rendering_(computer_graphics))**
## See Also

+ [Model-view-controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

## Related

+ [View](view.html)
+ [Template](template.html)
+ [Renderer](renderer.html)
+ [RecursiveTreeIterator](recursivetreeiterator.html)

## Related packages

+ [friendsofcake/cakepdf](https://packagist.org/packages/friendsofcake/cakepdf)
