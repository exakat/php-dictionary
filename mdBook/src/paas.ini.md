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

## See Also

+ [Heroku PHP](https://devcenter.heroku.com/categories/php-support)
+ [Platform.sh](https://platform.sh/)

Related : [IaaS](IaaS), [Software-as-a-Service (SAAS)](Software-as-a-Service (SAAS)), [Cloud](Cloud), [Application](Application), [Docker](Docker), [Hosting](Hosting), [Pay-as-you-go](Pay-as-you-go), [Serverless](Serverless)
