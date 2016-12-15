<?php
/**
 * Jigius UrlSafeBase64
 *
 * Simple library for url safe base64 manipulations
 *
 * @package   Jigius\UrlSafeBase64
 * @copyright Copyright (c) 2016, Jigius
 * @author    Jigius <jigius@gmail.com>
 * @license   MIT
 */

namespace Jigius\UrlSafeBase64;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Assets test
 *
 * Tests for the Assets class.
 */
class AssetsTest extends TestCase
{
    /**
     * Test encode & decode methods
     *
     * @test
     */
    public function testEncodeDecode()
    {
        $s = "== Just a little test ==";
        $this->assertEquals($s, Assets::decode(Assets::encode($s)));
    }
}
