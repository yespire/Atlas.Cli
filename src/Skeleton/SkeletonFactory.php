<?php
namespace Atlas\Cli\Skeleton;

use Atlas\Cli\Fsio;
use Atlas\Cli\Logger;

class SkeletonFactory
{
    protected $fsio;
    protected $logger;
    protected $conn;

    public function __construct(Fsio $fsio, Logger $logger, array $conn = [])
    {
        $this->fsio = $fsio;
        $this->logger = $logger;
        $this->conn = $conn;
    }

    public function newSkeleton()
    {
        return new Skeleton($this->fsio, $this->logger, $this->conn);
    }

    public function newSkeletonInput()
    {
        return new SkeletonInput();
    }
}
