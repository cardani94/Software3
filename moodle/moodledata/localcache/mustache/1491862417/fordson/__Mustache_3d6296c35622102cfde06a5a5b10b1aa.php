<?php

class __Mustache_3d6296c35622102cfde06a5a5b10b1aa extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $blocksContext = array();

        if ($partial = $this->mustache->loadPartial('core_admin/setting_configfile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
