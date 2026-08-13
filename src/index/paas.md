# PaaS
PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers.

For PHP applications, PaaS abstracts away web server configuration, PHP version management, and OS patching. The developer pushes code, via Git, a container image, or a deployment CLI, and the platform handles provisioning, scaling, and availability. Examples include Heroku, Platform.sh, Google App Engine, and AWS Elastic Beanstalk.

PaaS sits between IaaS, full infrastructure control, and SaaS, fully managed software. It trades flexibility for operational simplicity, making it well-suited for teams that want to ship PHP applications quickly without dedicated infrastructure engineers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paas.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paas.html","name":"PaaS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PaaS.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"paas"}]}]}</script>
```php
<?php

    // A typical PaaS entry point: the platform injects environment variables
    // for database credentials, ports, and other service bindings.

    $dsn = sprintf(
        'pgsql:host=%s;port=%s;dbname=%s',
        getenv('DB_HOST'),
        getenv('DB_PORT') ?: '5432',
        getenv('DB_NAME')
    );

    $pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASSWORD'), [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

    // The platform also controls the HTTP port
    $port = getenv('PORT') ?: 8080;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Platform_as_a_service)**
## See Also

+ [Heroku PHP](https://devcenter.heroku.com/categories/php-support)
+ [Platform.sh](https://platform.sh/)

## Related

+ [IaaS](iaas.html)
+ [Software-as-a-Service (SAAS)](saas.html)
+ [Cloud](cloud.html)
+ [Application](application.html)
+ [Docker](docker.html)
+ [Hosting](hosting.html)
+ [Pay-as-you-go](pay-as-you-go.html)
+ [Serverless](serverless.html)
