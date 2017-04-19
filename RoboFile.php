<?php

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    use \Codeception\Task\SplitTestsByGroups;

    public function testActionsGenerator()
        for ($i = 1; $i <= 100; ++$i) {
            $parallel->process(
                $this->taskCodecept('./bin/codecept')
                    ->suite('parallel')
            )->printed(true);
        }


        return $parallel->run();
    }
}
