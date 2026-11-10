# Canary Token
A canary token is a fake credential, file, URL or record, planted where an attacker is likely to find it. Nothing legitimate uses it, so any access is a strong signal of intrusion, and the token raises an alert the moment it is read or used.

Canary tokens are a detection technique rather than a prevention one. They do not block an attacker; they tell the defender that someone has got past the perimeter, and they do so with almost no false positives, since genuine users never touch them.

A PHP application can plant canary tokens as a decoy API key in a configuration file, a fake administrator row in a users table, or a dummy download link in a page that no real user would open. Any request that uses the decoy is logged and reported. Hosted services can generate tokens that alert by email when a URL or a document is opened.

Canary tokens are a close relative of the honeypot, which is a decoy system, and they share the same idea: whoever touches the trap has revealed themselves.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary-token.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary-token.html","name":"Canary Token","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:37:54 +0000","dateModified":"Tue, 10 Nov 2026 11:37:54 +0000","description":"A canary token is a fake credential, file, URL or record, planted where an attacker is likely to find it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary-token.html"]}],"alternateName":["honeytoken","canarytoken"],"keywords":["concept","security","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/honeypot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/secret.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monitoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pentest.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/docs.canarytokens.org\/guide\/"},{"@type":"CreativeWork","name":"Canarytokens documentation","url":"https:\/\/docs.canarytokens.org\/guide\/"},{"@type":"CreativeWork","name":"Honeypot (computing) - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Honeypot_(computing)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"canary-token"}]}]}</script>
```php
<?php

    // A decoy credential that no legitimate code ever uses
    $config = [
        'db_host' => 'db.internal',
        'api_key' => 'canary-key-0001', // canary: any use is an intrusion
    ];

    // Any attempt to authenticate with the decoy raises an alert
    if ($key === $config['api_key']) {
        $alerts->raise('canary token used', ['ip' => $_SERVER['REMOTE_ADDR'] ?? '']);
        http_response_code(403);
        exit;
    }

?>
```

**[Documentation](https://docs.canarytokens.org/guide/)**
## See Also

+ [Canarytokens documentation](https://docs.canarytokens.org/guide/)
+ [Honeypot (computing) - Wikipedia](https://en.wikipedia.org/wiki/Honeypot_(computing))

## Related

+ [Honey Pot](honeypot.html)
+ [Security](security.html)
+ [Secret](secret.html)
+ [Monitoring](monitoring.html)
+ [Canary](canary.html)
+ [Penetration Test](pentest.html)
