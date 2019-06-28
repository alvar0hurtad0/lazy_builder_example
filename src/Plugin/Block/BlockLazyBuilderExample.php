<?php

namespace Drupal\lazy_builder_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: placeholder with lazy_builder block.
 *
 * @Block(
 *   id = "example_lazy_build",
 *   admin_label = @Translation("Lazy Build block")
 * )
 */
class BlockLazyBuilderExample extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      'example_lazy_build' => [
        '#lazy_builder' => ['lazy_builder_example.example:getFormattedTime', []],
        '#create_placeholder' => TRUE,
      ],
      'content' => [
        '#markup' => '<br> no placeholder ->' . date('d-m-Y h:i:s'),
      ],
    ];
  }
}
