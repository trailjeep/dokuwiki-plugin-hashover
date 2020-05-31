<?php
/**
 * Plugin Hashover: Displays admin iframe
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Trailjeep <trailjeep@gmail.com>
 */

 
/**
 * All DokuWiki plugins to extend the admin function
 * need to inherit from this class
 */
class admin_plugin_hashover extends DokuWiki_Admin_Plugin {

    /**
     * @return int sort number in admin menu
     */
    public function getMenuSort()
    {
        return 1;
    }

    public function getMenuIcon()
    {
        return dirname(__FILE__) . '/hashover.svg';
    }

    public function getMenuText($language)
    {
        //return $this->getLang('menu_config');
        return 'Hashover Comments';
    }

    /**
     * output appropriate html
     */
    function html() {
      ptln('<div class="iframe-container">');
      ptln('<iframe src="/lib/plugins/hashover/hashover-next/admin/moderation/" title="Hashover Comments"></iframe>');
      ptln('</div>');
    }
 
}
