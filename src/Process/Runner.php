<?php

namespace Blok\Modules\Process;

use Blok\Modules\Contracts\RunableInterface;
use Blok\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Blok\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Blok\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
