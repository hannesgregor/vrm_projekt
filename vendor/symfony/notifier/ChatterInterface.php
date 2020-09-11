<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier;

use Symfony\Component\Notifier\Transport\TransportInterface;

/**
 * Interface for classes able to send chat messages synchronous and/or asynchronous.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 5.1
 */
interface ChatterInterface extends TransportInterface
{
}
