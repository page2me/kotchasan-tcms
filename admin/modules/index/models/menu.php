<?php
/*
 * @filesource menu.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Menu;

/**
 * Description
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Model
{

  /**
   * ข้อมูลรายการเมนู
   *
   * @return array
   */
  public static function get()
  {
    return array(
      'pages' => array(
        'text' => 'Pages',
        'url' => 'index.php?module=pages'
      ),
      'menus' => array(
        'text' => 'Menus',
        'url' => 'index.php?module=menus'
      ),
      'preview' => array(
        'text' => 'Preview',
        'url' => '../index.php',
        'target' => 'preview'
      ),
      'logout' => array(
        'text' => 'Logout',
        'url' => 'index.php?action=logout'
      )
    );
  }
}