<?php
/*
 * @filesource main.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Main;

use \Kotchasan\Template;

/**
 * Description
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class View extends \Kotchasan\View
{

  public static function render($detail)
  {
    // create View
    $view = new static;
    // template
    $template = Template::load('', '', 'main');
    $view->setContents(array(
      '/{CONTENT}/' => $detail
    ));
    // คืนค่าเนื้อหา
    return $view->renderHTML($template);
  }
}