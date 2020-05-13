<?php

namespace Stancl\Tenancy\Events;

use Stancl\Tenancy\Tenancy;

class RevertedToCentralContext
{
    /** @var Tenancy */
    public $tenancy;

    public function __construct(Tenancy $tenancy)
    {
        $this->tenancy = $tenancy;
    }
}
