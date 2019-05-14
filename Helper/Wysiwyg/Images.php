<?php
namespace Dmatthew\WidgetParameters\Helper\Wysiwyg;

class Images extends \Magento\Cms\Helper\Wysiwyg\Images
{
    /**
     * Prepare Image insertion declaration for Wysiwyg or textarea(as_is mode)
     *
     * @param string $filename Filename transferred via Ajax
     * @return string
     */
    public function getImagePath($filename)
    {
        $fileurl = $this->getCurrentUrl() . $filename;
        return $fileurl;
    }
}
