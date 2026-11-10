# Self-Hosted
Self-hosted means running an application or service on infrastructure that is directly controled, rather than using a version run by someone else. The machine may be a physical server in an office, a rented virtual machine, or a container on a host, but the operator, not a vendor, is responsible for installation, upgrades, backups and security.

Self-hosting gives full control over the data, the configuration and the update schedule, and it avoids a dependency on a third-party provider's pricing or availability. The cost is the operational work: patches, certificates, monitoring and recovery all fall to the operator, and a neglected instance can become a security risk.

Self-hosting is the opposite of a SaaS subscription, where the vendor runs the application. It is close to on-premise software, which is installed inside an organisation's own premises, but a self-hosted application may just as well run in a rented cloud server or a container.

Many PHP applications are self-hosted: a blog engine, a wiki, an e-commerce store or a CRM is installed on a server the site owner manages, typically with a web server, PHP-FPM and a database.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-hosted.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-hosted.html","name":"Self-Hosted","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:08:13 +0000","dateModified":"Tue, 10 Nov 2026 11:08:13 +0000","description":"Self-hosted means running an application or service on infrastructure that is directly controled, rather than using a version run by someone else","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-hosted.html"]}],"alternateName":["self-host","selfhosted"],"keywords":["concept","architecture","devops"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/on-premise-software.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cloud.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hosting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker-image.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/devops.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Self-hosting_(web_services)"},{"@type":"CreativeWork","name":"Self Hosted PHP","url":"https:\/\/awesome-selfhosted.net\/platforms\/php.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"self-hosted"}]}]}</script>
```php
<?php

    // A self-hosted app reads its own configuration from the server it runs on
    $dsn = getenv('DATABASE_URL') ?: 'mysql:host=localhost;dbname=app';
    $pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASSWORD'));

    // The operator sets the public URL, so links point to this installation
    $baseUrl = rtrim(getenv('APP_URL'), '/');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Self-hosting_(web_services))**
## See Also

+ [Self Hosted PHP](https://awesome-selfhosted.net/platforms/php.html)

## Related

+ [On Premise Software](on-premise-software.html)
+ [Software-as-a-Service (SAAS)](saas.html)
+ [Cloud](cloud.html)
+ [Hosting](hosting.html)
+ [Docker Image](docker-image.html)
+ [DevOps](devops.html)
+ [Security](security.html)
+ [Privacy](privacy.html)
