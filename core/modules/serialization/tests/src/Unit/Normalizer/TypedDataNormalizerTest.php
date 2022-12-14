<?php

namespace Drupal\Tests\serialization\Unit\Normalizer;

use Drupal\Tests\UnitTestCase;
use Drupal\serialization\Normalizer\TypedDataNormalizer;

/**
 * @coversDefaultClass \Drupal\serialization\Normalizer\TypedDataNormalizer
 * @group serialization
 */
class TypedDataNormalizerTest extends UnitTestCase {

  /**
   * The TypedDataNormalizer instance.
   *
   * @var \Drupal\serialization\Normalizer\TypedDataNormalizer
   */
  protected $normalizer;

  /**
   * The mock typed data instance.
   *
   * @var \Drupal\Core\TypedData\TypedDataInterface|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $typedData;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    $this->normalizer = new TypedDataNormalizer();
    $this->typedData = $this->createMock('Drupal\Core\TypedData\TypedDataInterface');
  }

  /**
   * Tests the supportsNormalization() method.
   */
  public function testSupportsNormalization() {
    $this->assertTrue($this->normalizer->supportsNormalization($this->typedData));
    // Also test that an object not implementing TypedDataInterface fails.
    $this->assertFalse($this->normalizer->supportsNormalization(new \stdClass()));
  }

  /**
   * Tests the normalize() method.
   */
  public function testNormalize() {
    $this->typedData->expects($this->once())
      ->method('getValue')
      ->will($this->returnValue('test'));

    $this->assertEquals('test', $this->normalizer->normalize($this->typedData));
  }

}
