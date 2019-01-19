<?php

namespace Blok\Modules\Laravel;

use Blok\Modules\Json;
use Blok\Modules\Repository as BaseRepository;

class Repository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
