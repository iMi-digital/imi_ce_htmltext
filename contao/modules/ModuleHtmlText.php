<?php


namespace iMi\CeHtmlText;

/**
 * @category IMI
 */
class ModuleHtmlText extends \ModuleHtml
{
    protected function compile()
    {
        $this->Template->html = (TL_MODE == 'FE') ? $this->html : $this->name;
    }
}