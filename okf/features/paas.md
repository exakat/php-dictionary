---
type: "PHP Feature"
title: "PaaS"
description: "PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers."
resource: "https://en.wikipedia.org/wiki/Platform_as_a_service"
tags: ["cloud", "infrastructure", "devops", "hosting"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PaaS

PaaS, or Platform as a Service, is a cloud-computing model in which a provider manages the underlying infrastructure, like hardware, operating system, and runtime, so that developers can focus on deploying and running applications without administering servers.

For PHP applications, PaaS abstracts away web server configuration, PHP version management, and OS patching. The developer pushes code, via Git, a container image, or a deployment CLI, and the platform handles provisioning, scaling, and availability. Examples include Heroku, Platform.sh, Google App Engine, and AWS Elastic Beanstalk.

PaaS sits between IaaS, full infrastructure control, and SaaS, fully managed software. It trades flexibility for operational simplicity, making it well-suited for teams that want to ship PHP applications quickly without dedicated infrastructure engineers.

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

## Documentation
- [https://en.wikipedia.org/wiki/Platform_as_a_service](https://en.wikipedia.org/wiki/Platform_as_a_service)

## See Also
- [Heroku PHP](https://devcenter.heroku.com/categories/php-support)
- [Platform.sh](https://platform.sh/)

## Related
- [IaaS](/features/iaas.md)
- [Software-as-a-Service (SAAS)](/features/saas.md)
- [Cloud](/features/cloud.md)
- [Application](/features/application.md)
- [Docker](/features/docker.md)
- [Hosting](/features/hosting.md)
- [Pay-as-you-go](/features/pay-as-you-go.md)
- [Serverless](/features/serverless.md)

