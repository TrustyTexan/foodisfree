<?php
/**
 * @file
 * photos.features.inc
 */

/**
 * Implements hook_views_api().
 */
function photos_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function photos_node_info() {
  $items = array(
    'photo' => array(
      'name' => t('Photo'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
