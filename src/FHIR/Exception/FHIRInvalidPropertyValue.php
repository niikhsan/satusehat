<?php

namespace Niikhsan\SatusehatIntegration\FHIR\Exception;

class FHIRInvalidPropertyValue extends FHIRException
{
    public function __construct($message)
    {
        $message = 'FHIR Invalid Property Value: '.$message;

        parent::__construct($message);
    }
}
