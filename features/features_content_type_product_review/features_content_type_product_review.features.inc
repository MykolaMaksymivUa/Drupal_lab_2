<?php

/**
 * @file
 * features_content_type_product_review.features.inc
 */

/**
 * Implements hook_node_info().
 */
function features_content_type_product_review_node_info() {
  $items = array(
    'product' => array(
      'name' => t('Product'),
      'base' => 'node_content',
      'description' => t('Product type of content'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'product_review' => array(
      'name' => t('Product review'),
      'base' => 'node_content',
      'description' => t('It is a content type review for content Product'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
