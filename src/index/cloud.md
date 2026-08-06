# Cloud
Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics..., over the internet. Instead of owning and maintaining physical hardware, developers and organizations rent these resources from cloud providers on a pay-as-you-go basis.

The main service models are:

+ IaaS, Infrastructure as a Service: virtual machines, storage, networking
+ PaaS, Platform as a Service: managed runtime environments, databases, deployment pipelines
+ SaaS, Software as a Service: fully managed applications

For PHP applications, cloud platforms provide hosting environments, e.g. AWS Elastic Beanstalk, Google Cloud Run, Azure App Service..., managed databases, object storage like S3, and serverless functions. The cloud enables horizontal scaling, geographic distribution, and resilience.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cloud.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cloud.html","name":"Cloud","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:21:14 +0000","dateModified":"Thu, 16 Jul 2026 08:21:14 +0000","description":"Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cloud.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Reading AWS S3 object using the AWS SDK
    require 'vendor/autoload.php';

    $s3 = new Aws\S3\S3Client([
        'region'  => 'eu-west-1',
        'version' => 'latest',
    ]);
    
    $result = $s3->getObject([
        'Bucket' => 'my-bucket',
        'Key'    => 'my-file.txt',
    ]);
    
    echo $result['Body'];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Cloud_computing)**
## Related

+ [IaaS](iaas.ini.html)
+ [PaaS](paas.ini.html)
+ [Software-as-a-Service (SAAS)](saas.ini.html)
+ [Horizontal Scaling](horizontal-scaling.ini.html)
+ [Microservice](microservice.ini.html)
+ [Docker Container](docker-container.ini.html)
+ [Deployment](deploy.ini.html)
+ [Pay-as-you-go](pay-as-you-go.ini.html)
+ [Docker](docker.ini.html)
+ [Hosting](hosting.ini.html)
+ [Serverless](serverless.ini.html)

## Related packages

+ [aws/aws-sdk-php](https://packagist.org/packages/aws/aws-sdk-php)
+ [google/cloud](https://packagist.org/packages/google/cloud)
