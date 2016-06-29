<?php
/**
 *
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace DoraBundle\Commands;

use DoraBundle\Server\DoraServer;
use FastD\Console\Input\Input;
use FastD\Console\Output\Output;
use FastD\Framework\Bundle\Commands\CommandAware;

class DoraCommand extends CommandAware
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return 'dora:rpc';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dora:rpc';
    }

    /**
     * @return void
     */
    public function configure()
    {
        // TODO: Implement configure() method.
    }

    /**
     * @param Input $input
     * @param Output $output
     * @return int
     */
    public function execute(Input $input, Output $output)
    {
        $server = new DoraServer();
    }
}