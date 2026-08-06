# Slug
A slug is a URL-friendly string derived from a human-readable label. It typically consists of lowercase letters, digits, and hyphens, with spaces and special characters removed or replaced.

Slugs are widely used in web applications to build readable, SEO-friendly URLs. For example, the title ``Hello World!`` becomes the slug ``hello-world``.

PHP does not have a built-in slug generator, but the transformation can be achieved by combining ``strtolower()``, ``preg_replace()``, and transliteration via ``iconv()``. Many frameworks and libraries also provide dedicated helpers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/slug.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/slug.html","name":"Slug","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A slug is a URL-friendly string derived from a human-readable label","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Slug.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Universal Resource Locator (URL)](url.ini.html)
+ [Search Engine Optimization (SEO)](seo.ini.html)
+ [strtolower()](strtolower.ini.html)
+ [String](string.ini.html)
+ [Unique Identifier](unique-identifier.ini.html)
