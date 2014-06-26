<?php
/**
 * StudIPSyntaxHighlighter.class.php
 *
 * @author Till Glöggler <tgloeggl@uos.de>
 **/

class StudIPSyntaxHighlighter extends StudIPPlugin implements SystemPlugin
{
    function __construct()
    {
        parent::__construct();
        
        PageLayout::addScript($this->getPluginURL() . '/scripts/jquery.syntaxhighlighter.min.js');
        PageLayout::addHeadElement('script', array(), '$.SyntaxHighlighter.init({"wrapLines" : false});');
        PageLayout::addHeadElement('script', array(), '$(document).ready(function() { 
            $("code.code_content").addClass("highlight").removeClass("code_content").css("width", "auto");
            $("div.code_header").remove();
        });');
    }
}
