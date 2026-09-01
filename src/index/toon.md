# Token Oriented Object Notation (TOON)
``TOON``, which stands for ``Token Oriented Object Notation``, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow. It's intended for LLM input as a drop-in, lossless representation of JSON data.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toon.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toon.html","name":"Token Oriented Object Notation (TOON)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 04:49:21 +0000","dateModified":"Mon, 24 Aug 2026 04:49:21 +0000","description":"TOON, which stands for Token Oriented Object Notation, is a compact, human-readable encoding of the JSON data model that minimizes tokens and makes structure easy for models to follow","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toon.html"]}],"keywords":["acronym","format","ai"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/markdown.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/text.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/toonformat.dev\/"},{"@type":"CreativeWork","name":"toon format","url":"https:\/\/github.com\/toon-format\/toon"},{"@type":"CreativeWork","name":"How to Use TOON Format in PHP - Complete Tutorial","url":"https:\/\/jsontotable.org\/blog\/toon\/how-to-use-toon-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"toon"}]}]}</script>
```php
<?php

    // example from https://github.com/toon-format/toon
    $toon = <<<TOON
context:
  task: Our favorite hikes together
  location: Boulder
  season: spring_2025
friends[3]: ana,luis,sam
hikes[3]{id,name,distanceKm,elevationGain,companion,wasSunny}:
  1,Blue Lake Trail,7.5,320,ana,true
  2,Ridge Overlook,9.2,540,luis,false
  3,Wildflower Loop,5.1,180,sam,true    
TOON;

?>
```

**[Documentation](https://toonformat.dev/)**
## See Also

+ [toon format](https://github.com/toon-format/toon)
+ [How to Use TOON Format in PHP - Complete Tutorial](https://jsontotable.org/blog/toon/how-to-use-toon-in-php)

## Related

+ [Markdown](markdown.html)
+ [Text](text.html)

## Related packages

+ [sbsaga/toon](https://packagist.org/packages/sbsaga/toon)
+ [helgesverre/toon](https://packagist.org/packages/helgesverre/toon)
