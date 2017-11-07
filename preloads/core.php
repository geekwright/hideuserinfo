<?php
/**
 * Hide User Info
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright 2000-2016 XOOPS Project (www.xoops.org)
 * @license   GNU GPL 2 (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package   hideuserinfo
 * @author    geekwright <richard@geekwright.com>
 */

// defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

/**
 * Hideuserinfo core preloads
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 */
class HideuserinfoCorePreload extends XoopsPreloadItem
{
    /**
     * @param $args
     */
    public static function eventCoreUserinfoStart($args)
    {
        if (!is_object($GLOBALS['xoopsUser'])) {
            redirect_header('index.php', 3, _NOPERM);
        }
    }
}
