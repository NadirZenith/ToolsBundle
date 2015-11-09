<?php

namespace Nz\ToolsBundle\Logger;

/**
 * Description of KintLogger
 *
 * @author tino
 */
class GlobalKintLogger implements LoggerInterface
{

    public function log($data)
    {
        d($data);
    }
    //put your code here
}
