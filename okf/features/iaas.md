---
type: "PHP Feature"
title: "IaaS"
description: "IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage."
resource: "https://en.wikipedia.org/wiki/Infrastructure_as_a_service"
tags: ["cloud", "infrastructure", "devops", "hosting"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# IaaS

IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage.

Unlike PaaS or SaaS, IaaS gives the consumer control over the operating system, runtime, and application stack. The provider manages physical hardware and hypervisors; the consumer manages everything above.

PHP applications hosted on IaaS run on virtual machines or bare-metal instances managed by the team. Common IaaS providers include AWS EC2, Google Compute Engine, and Azure Virtual Machines. Automation tools such as Ansible, Terraform, or Chef are typically used to provision and configure the PHP runtime, web server, and database on top of the raw infrastructure.

```php
<?php

    // Interacting with IaaS resources via an SDK — AWS example
    use Aws\Ec2\Ec2Client;

    $client = new Ec2Client([
        'region'  => 'eu-west-1',
        'version' => 'latest',
    ]);

    // List running instances
    $result = $client->describeInstances([
        'Filters' => [['Name' => 'instance-state-name', 'Values' => ['running']]],
    ]);

    foreach ($result['Reservations'] as $reservation) {
        foreach ($reservation['Instances'] as $instance) {
            echo $instance['InstanceId'] . PHP_EOL;
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Infrastructure_as_a_service](https://en.wikipedia.org/wiki/Infrastructure_as_a_service)

## See Also
- [AWS EC2](https://aws.amazon.com/ec2/)
- [Google Compute Engine](https://cloud.google.com/compute)
- [Azure Virtual Machines](https://azure.microsoft.com/en-us/products/virtual-machines/)

## Related
- [PaaS](/features/paas.md)
- [Software-as-a-Service (SAAS)](/features/saas.md)
- [Cloud](/features/cloud.md)
- [Application](/features/application.md)
- [Docker](/features/docker.md)
- [Hosting](/features/hosting.md)
- [Pay-as-you-go](/features/pay-as-you-go.md)
- [Serverless](/features/serverless.md)

## Details
- Packagist: [aws/aws-sdk-php](https://packagist.org/packages/aws/aws-sdk-php)

