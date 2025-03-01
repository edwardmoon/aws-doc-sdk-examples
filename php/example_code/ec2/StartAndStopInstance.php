<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 *  ABOUT THIS PHP SAMPLE: This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/ec2-examples-managing-instances.html
 *
 *
 *
 */
// snippet-start:[ec2.php.start_and_stop_instance.complete]
// snippet-start:[ec2.php.start_and_stop_instance.import]

require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;
// snippet-end:[ec2.php.start_and_stop_instance.import]
/**
 * Start and Stop Instances
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[ec2.php.start_and_stop_instance.main]
$ec2Client = new Aws\Ec2\Ec2Client([
    'region' => 'us-west-2',
    'version' => '2016-11-15',
    'profile' => 'default'
]);

$action = 'START';

$instanceIds = array('InstanceID1', 'InstanceID2');

if ($action == 'START') {
    $result = $ec2Client->startInstances(array(
        'InstanceIds' => $instanceIds,
    ));
} else {
    $result = $ec2Client->stopInstances(array(
        'InstanceIds' => $instanceIds,
    ));
}

var_dump($result);
 
 
// snippet-end:[ec2.php.start_and_stop_instance.main]
// snippet-end:[ec2.php.start_and_stop_instance.complete]

