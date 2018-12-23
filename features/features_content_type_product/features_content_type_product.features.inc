<?php

/**
 * @file
 * features_content_type_product.features.inc
 */

/**
 * Implements hook_node_info().
 */
function features_content_type_product_node_info() {
  $items = array(
    'product' => array(
      'name' => t('Product'),
      'base' => 'node_content',
      'description' => t('Product type of content'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
