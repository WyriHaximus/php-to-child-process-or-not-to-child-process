<?php declare(strict_types=1);

namespace WyriHaximus;

use Doctrine\Common\Annotations\Reader;
use WyriHaximus\Annotations\ChildProcess;

function toChildProcessOrNotToChildProcess(string $callable, Reader $annotationReader = null): bool
{
    return toXOrNotToX(ChildProcess::class, $callable, $annotationReader);
}
