<?php

/**
 * (c) 2013 - ∞ Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace spec\Vespolina\Workflow\Task;

use PhpSpec\ObjectBehavior;

class AutomaticSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Vespolina\Workflow\Task\Automatic');
        $this->shouldReturnAnInstanceOf('Vespolina\Workflow\TransactionInterface');
    }
}
