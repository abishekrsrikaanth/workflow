<?php

/**
 * (c) 2013 - ∞ Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\Workflow;

use Psr\Log\LoggerInterface;

class Node implements NodeInterface
{
    protected $logger;
    protected $name;
    /** @var  \Vespolina\Workflow\Workflow */
    protected $workflow;

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        if (!$this->name) {
            return get_class($this);
        }

        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setWorkflow(Workflow $workflow, LoggerInterface $logger)
    {
        $this->workflow = $workflow;
        $this->logger = $logger;

        return $this;
    }
}
