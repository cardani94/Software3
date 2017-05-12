<?php

class __Mustache_c9d5b25fc3cbb215c6971cdfc1a4a4b9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        
        $blocksContext['element'] = array($this, 'blockD534734f3e0de6370b5558b998ff2df2');
        
        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext($blocksContext);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function blockD534734f3e0de6370b5558b998ff2df2($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= $value;
        $buffer .= '
';
    
        return $buffer;
    }
}
