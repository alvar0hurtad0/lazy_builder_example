<?php

namespace Drupal\lazy_builder_example;

/**
 * Class ExampleLazyBuilder.
 */
class ExampleLazyBuilder {
  /**
   * Get a formatted time for testing purposes.
   */
  public function getFormattedTime() {
    return [
      '#markup' => 'With placeholder ->' . date('d-m-Y h:i:s'),
    ];
  }
}
