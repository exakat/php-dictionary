# Write Context
The write context, also called output context or sink context, is the location in the final document where a piece of data is emitted: an HTML body, an HTML attribute, a ``<script>`` block, a CSS value, or a URL. It determines which encoding function is the correct, safe one to use.

The same untrusted string requires different treatment depending on where it lands. ``htmlspecialchars()`` is correct for text placed in the HTML body or most attributes, but it does not make a string safe to place inside a ``<script>`` block: quotes and angle brackets are neutralized for HTML, not for JavaScript string literals, so a value escaped for one context can still break out of, or inject code into, another. Data written into a JavaScript context should instead be encoded with ``json_encode()``, or a dedicated helper such as Laravel's ``Js::from()``, and data written into a URL should be passed through ``urlencode()`` or ``rawurlencode()``.

Using the wrong write context, for instance HTML-escaping a value before printing it inside a ``<script>`` tag, is a common and easily-missed source of ``XSS``, because the mistake only shows up for inputs containing the specific characters the chosen encoder does not handle.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/write-context.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/write-context.html","name":"Write Context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:02 +0000","dateModified":"Thu, 06 Aug 2026 05:50:02 +0000","description":"The write context, also called output context or sink context, is the location in the final document where a piece of data is emitted: an HTML body, an HTML attribute, a <script> block, a CSS value, or a URL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Write Context.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"write-context"}]}]}</script>
```php
<?php

    $name = $_GET['name']; // e.g. '</script><script>alert(1)</script>'

?>
<!-- HTML body context: htmlspecialchars() is correct -->
<p>Hello, <?= htmlspecialchars($name) ?></p>

<script>
    // Script context: htmlspecialchars() is NOT enough here.
    // Use a JSON-safe encoder instead.
    const name = <?= json_encode($name, JSON_HEX_TAG | JSON_HEX_APOS) ?>;
</script>
```

**[Documentation](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)**
## Related

+ [HTML Escaping](escape-html.html)
+ [Escape Data](escape-data.html)
+ [Encode](encode.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Stored XSS](stored-xss.html)
+ [json\_encode()](json_encode.html)
+ [htmlspecialchars](htmlspecialchars.html)
+ [Sanitation](sanitation.html)
