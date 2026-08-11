# Quoted Printable
Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean, such as SMTP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quoted-printable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quoted-printable.html","name":"Quoted Printable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean, such as SMTP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Quoted Printable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"quoted-printable"}]}]}</script>
```php
<?php

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable\r\n";

$body = quoted_printable_encode("Café\nRésumé");

mail("example@php.net", "Some subject", $body, $headers);

?>
```

**[Documentation](https://www.php.net/manual/en/function.quoted-printable-encode.php)**
## See Also

+ [RFC-2045](https://datatracker.ietf.org/doc/html/rfc2045)

## Related

+ [Simple Mail Transfer Protocol (SMTP)](smtp.html)
