<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 *  ABOUT THIS PHP SAMPLE: This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/ec2-examples-using-elastic-ip-addresses.html
 *
 *
 *
 */
// snippet-start:[ec2.php.release_address.complete]
// snippet-start:[ec2.php.release_address.import]

require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;
// snippet-end:[ec2.php.release_address.import]
/**
 * Disassociate Address and Release Allocated Address
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[ec2.php.release_address.main]
$ec2Client = new Aws\Ec2\Ec2Client([
    'region' => 'us-west-2',
    'version' => '2016-11-15',
    'profile' => 'default'
]);

$associationID = 'AssociationID';

$allocationID = 'AllocationID';

$result = $ec2Client->disassociateAddress(array(
    'AssociationId' => $associationID,
));

$result = $ec2Client->releaseAddress(array(
    'AllocationId' => $allocationID,
));

var_dump($result);
 
 
// snippet-end:[ec2.php.release_address.main]
// snippet-end:[ec2.php.release_address.complete]

