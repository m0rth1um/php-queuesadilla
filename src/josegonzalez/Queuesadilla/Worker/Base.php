<?php

namespace josegonzalez\Queuesadilla\Worker;

use josegonzalez\Queuesadilla\Engine\EngineInterface;
use josegonzalez\Queuesadilla\Event\EventManagerTrait;
use josegonzalez\Queuesadilla\Utility\LoggerTrait;
use josegonzalez\Queuesadilla\Worker\Listener\StatsListener;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

abstract class Base
{
    use EventManagerTrait;

    use LoggerTrait;

    protected $engine;

    protected $maxIterations;

    protected $maxRuntime;

    protected $queue;

    protected $stats;

    public function __construct(EngineInterface $engine, LoggerInterface $logger = null, $params = [])
    {
        $params = array_merge([
            'maxIterations' => null,
            'maxRuntime' => null,
            'queue' => 'default',
        ], $params);

        $this->engine = $engine;
        $this->queue = $params['queue'];
        $this->maxIterations = $params['maxIterations'];
        $this->iterations = 0;
        $this->maxRuntime = $params['maxRuntime'];
        $this->runtime = 0;
        $this->name = get_class($this->engine) . ' Worker';
        $this->setLogger($logger);

        $this->StatsListener = new StatsListener;
        $this->attachListener($this->StatsListener);
        register_shutdown_function(array(&$this, 'shutdownHandler'));

        return $this;
    }

    public function stats()
    {
        return $this->StatsListener->stats;
    }

    public function shutdownHandler()
    {
        $this->disconnect();

        $this->logger->info(sprintf(
            "Worker shutting down after running %d iterations in %ds",
            $this->iterations,
            $this->runtime
        ));
        return true;
    }

    abstract public function work();

    abstract protected function disconnect();
}
