# Slug
A slug is a URL-friendly string derived from a human-readable label. It typically consists of lowercase letters, digits, and hyphens, with spaces and special characters removed or replaced.

Slugs are widely used in web applications to build readable, SEO-friendly URLs. For example, the title ``Hello World!`` becomes the slug ``hello-world``.

PHP does not have a built-in slug generator, but the transformation can be achieved by combining ``strtolower()``, ``preg_replace()``, and transliteration via ``iconv()``. Many frameworks and libraries also provide dedicated helpers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slug.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slug.html","name":"Slug","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"A slug is a URL-friendly string derived from a human-readable label","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slug.html"]}],"keywords":["concept","string","web","url"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Clean_URL#Slug"},{"@type":"CreativeWork","name":"What is a slug?","url":"https:\/\/yoast.com\/slug\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"slug"}]}]}</script>
```php
<?php

    function slugify(string $text): string {
        $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }

    echo slugify('Hello World!'); // hello-world

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Clean_URL#Slug)**
## See Also

+ [What is a slug?](https://yoast.com/slug/)

## Related

+ [Universal Resource Locator (URL)](url.html)
+ [Search Engine Optimization (SEO)](seo.html)
+ [strtolower()](strtolower.html)
+ [String](string.html)
+ [Unique Identifier](unique-identifier.html)
