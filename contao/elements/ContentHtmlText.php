<?php


namespace iMi\CeHtmlText;

/**
 * @category IMI
 */
class ContentHtmlText extends \ContentHtml
{
    protected function compile()
    {
        if (TL_MODE == 'FE')
        {
            return parent::compile();
        }
        else
        {
            $this->Template->html = $this->text;
        }
    }
}