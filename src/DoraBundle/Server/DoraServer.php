<?php
/**
 *
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace DoraBundle\Server;

use DoraRPC\Server;

class DoraServer extends Server
{
    public function initServer($server)
    {
        // TODO: Implement initServer() method.
    }

    public function initTask($server, $worker_id)
    {
        // TODO: Implement initTask() method.
    }

    public function doWork($param)
    {
        return array("hehe"=>"ohyes");
    }
}