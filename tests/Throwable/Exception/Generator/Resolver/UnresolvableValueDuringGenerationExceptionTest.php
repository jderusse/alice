<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception\Generator\Resolver;

use Nelmio\Alice\Throwable\ResolutionThrowable;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Nelmio\Alice\Throwable\Exception\Generator\Resolver\UnresolvableValueDuringGenerationException
 */
class UnresolvableValueDuringGenerationExceptionTest extends TestCase
{
    public function testIsARuntimeException()
    {
        $this->assertTrue(is_a(UnresolvableValueDuringGenerationException::class, \RuntimeException::class, true));
    }

    public function testIsAnUnresolvableValueException()
    {
        $this->assertTrue(is_a(UnresolvableValueDuringGenerationException::class, UnresolvableValueException::class, true));
    }

    public function testIsAResolutionThrowable()
    {
        $this->assertTrue(is_a(UnresolvableValueDuringGenerationException::class, ResolutionThrowable::class, true));
    }

    public function testIsExtensible()
    {
        $exception = new ChildUnresolvableValueDuringGenerationException();
        $this->assertInstanceOf(ChildUnresolvableValueDuringGenerationException::class, $exception);
    }
}
