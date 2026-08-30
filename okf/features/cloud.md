---
type: "concept"
title: "Cloud"
description: "Cloud computing refers to the delivery of computing services, servers, storage, databases, networking, software, analytics..., over the internet."
resource: "https://en.wikipedia.org/wiki/Cloud_computing"
tags: ["concept", "architecture", "devops", "hosting"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Cloud_computing](https://en.wikipedia.org/wiki/Cloud_computing)

## See Also
- [NIST: The NIST Definition of Cloud Computing](https://nvlpubs.nist.gov/nistpubs/legacy/sp/nistspecialpublication800-145.pdf)
- [AWS: What is Cloud Computing?](https://aws.amazon.com/what-is-cloud-computing/)

## Related
- [IaaS](/features/iaas.md)
- [PaaS](/features/paas.md)
- [Software-as-a-Service (SAAS)](/features/saas.md)
- [Horizontal Scaling](/features/horizontal-scaling.md)
- [Microservice](/features/microservice.md)
- [Docker Container](/features/docker-container.md)
- [Deployment](/features/deploy.md)
- [Pay-as-you-go](/features/pay-as-you-go.md)
- [Docker](/features/docker.md)
- [Hosting](/features/hosting.md)
- [Serverless](/features/serverless.md)

## Details
- Packagist: [aws/aws-sdk-php](https://packagist.org/packages/aws/aws-sdk-php)
- Packagist: [google/cloud](https://packagist.org/packages/google/cloud)

