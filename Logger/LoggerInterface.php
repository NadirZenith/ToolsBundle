<?php

namespace Nz\ToolsBundle\Logger;

/**
 * Description of LoggerInterface
 *
 * @author tino
 */
interface LoggerInterface
{

    /*
     * Set logger
     */
    /* public function setLogger( GlobalKintLogger $logger); */

    /**
     * Logger Log
     */
    public function log($data);
}
