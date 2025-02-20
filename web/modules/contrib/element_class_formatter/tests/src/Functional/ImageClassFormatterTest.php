<?php

declare(strict_types=1);

namespace Drupal\Tests\element_class_formatter\Functional;

use Drupal\entity_test\Entity\EntityTest;
use Drupal\file\Entity\File;

/**
 * Functional tests for the image link with class formatter.
 *
 * @group element_class_formatter
 */
class ImageClassFormatterTest extends ElementClassFormatterTestBase {

  const TEST_CLASS = 'test-image-class';

  /**
   * {@inheritdoc}
   */
  public function testClassFormatter() {
    $formatter_settings = [
      'class' => self::TEST_CLASS,
    ];
    $field_config = $this->createEntityField('image_class', 'image', $formatter_settings);

    $image = current($this->getTestFiles('image'));
    $file = File::create([
      'uri' => $image->uri,
      'status' => 1,
    ]);
    $file->save();

    $entity = EntityTest::create([
      $field_config->getName() => [['target_id' => $file->id()]],
    ]);
    $entity->save();

    $this->drupalGet($entity->toUrl());
    $assert_session = $this->assertSession();
    $assert_session->elementExists('css', 'img.' . self::TEST_CLASS);
  }

}
