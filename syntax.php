<?php
/**
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Trailjeep <trailjeep@gmail.com>
 */

if(!defined('DOKU_INC')) define('DOKU_INC',realpath(dirname(__FILE__).'/../../').'/');
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');

/**
 * All DokuWiki plugins to extend the parser/rendering mechanism
 * need to inherit from this class
 */
class syntax_plugin_hashover extends DokuWiki_Syntax_Plugin {

    /**
     * What kind of syntax are we?
     */
    function getType(){
        return 'substition';
    }

    function getPType(){
        return 'block';
    }

    /**
     * Where to sort in?
     */
    function getSort(){
        return 160;
    }

    /**
     * Connect pattern to lexer
     */
    function connectTo($mode) {
      $this->Lexer->addSpecialPattern('~~HASHOVER~~',$mode,'plugin_hashover');
    }

    /**
     * Handle the match
     */
    function handle($match, $state, $pos, Doku_Handler $handler){
    }

    /**
     * Create output
     */
    function render($mode, Doku_Renderer $R, $data) {
        if($mode != 'xhtml') return false;
        //$R->doc .= $this->_hashover($data);
        $R->doc .= '<div id="hashover"></div>';
        $R->doc .= '<script type="text/javascript" src="'.DOKU_PLUGIN.'/hashover/hashover-next/comments.php"></script>';
        $R->doc .= '<noscript>You must have JavaScript enabled to use the comments.</noscript>';
        return true;
    }
}

//Setup VIM: ex: et ts=4 enc=utf-8 :
