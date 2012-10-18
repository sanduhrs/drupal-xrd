<?php

/**
 * @file
 */

// Usage example:
//
// $xrd = array();
// $xrd_document = xrd_document('host_meta', $xrd);
//
// Alter the data elswhere:
// function module_xrd_host_meta_alter($xrd) {
//   $xrd->links[] = array(
//     'rel' => 'persona',
//     'href' => '/.well-known/browserid',
//   );
// }

/**
 * 
 */
function hook_xrd_TYPE_alter($xrd) {
  $xrd = array(
    'alias' => '',
    'subject' => '',
    'expires' => '',
    'links' => array(
      array(
        'rel' => NULL,
        'type' => NULL,
        'href' => NULL,
        'template' => NULL,
        'title' => NULL,
        'properties' => array(
          array(
            'type' => '',
            'value' => ''
          ),
        ),
      ),
    ),
    'properties' => array(
      array(
        'type' => '',
        'value' => ''
      ),
    ),
  );
  return $xrd;
}
