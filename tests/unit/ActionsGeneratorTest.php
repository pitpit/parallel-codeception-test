<?php

use Codeception\Lib\Generator\Actions as ActionsGenerator;

class ActionsGeneratorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSave()
    {
        $settings = [];
        $actionsGenerator = new ActionsGenerator($settings);

        $content = $actionsGenerator->produce();

        // $file = $this->buildPath(Configuration::supportDir().'_generated', $settings['class_name']);
        // $file .= $this->getClassName($settings['class_name']).'Actions.php';

        $file = sys_get_temp_dir().'/TestActions.php';

        $actionsGenerator->save($file, $content, true);
    }
}
