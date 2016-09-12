<?php
/*
 * @filesource pagenotfound.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Pagenotfound;

/**
 * เนื้อหาหน้า Page Not Found
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Controller extends \Kotchasan\Controller
{

  /**
   * เนื้อหาหน้า 404
   *
   * @return string
   */
  public static function render()
  {
    return (object)array(
        'module' => 'pagenotfound',
        'title' => self::$cfg->web_title,
        'detail' => '<div class=error>ขออภัย : ไม่พบหน้าที่เรียก</div>'
    );
  }
}