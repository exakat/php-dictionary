# Cloud
Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics..., over the internet. Instead of owning and maintaining physical hardware, developers and organizations rent these resources from cloud providers on a pay-as-you-go basis.

The main service models are:

+ IaaS, Infrastructure as a Service: virtual machines, storage, networking
+ PaaS, Platform as a Service: managed runtime environments, databases, deployment pipelines
+ SaaS, Software as a Service: fully managed applications

For PHP applications, cloud platforms provide hosting environments, e.g. AWS Elastic Beanstalk, Google Cloud Run, Azure App Service..., managed databases, object storage like S3, and serverless functions. The cloud enables horizontal scaling, geographic distribution, and resilience.

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

Related : [IaaS](IaaS), [PaaS](PaaS), [Software-as-a-Service (SAAS)](Software-as-a-Service (SAAS)), [Horizontal Scaling](Horizontal Scaling), [Microservice](Microservice), [Docker Container](Docker Container), [Deployment](Deployment), [Pay-as-you-go](Pay-as-you-go), [Docker](Docker), [Hosting](Hosting), [Serverless](Serverless)
