<?php

class __Mustache_a28c541848985a7c11df7878c6407a72 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<a class="btn btn-link p-a-0" role="button"
';
        $buffer .= $indent . '    data-container="body" data-toggle="popover"
';
        $buffer .= $indent . '    data-placement="';
        // 'ltr' section
        $value = $context->find('ltr');
        $buffer .= $this->section6f33152a41341e2c397de871a1796b75($context, $indent, $value);
        // 'ltr' inverted section
        $value = $context->find('ltr');
        if (empty($value)) {
            
            $buffer .= 'left';
        }
        $buffer .= '" data-content="';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('completedoclink'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-html="true" tabindex="0" data-trigger="focus">
';
        $buffer .= $indent . '  ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section140d3900a806887f1155d1216da95f3a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function section6f33152a41341e2c397de871a1796b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'right';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section140d3900a806887f1155d1216da95f3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'help, core, {{alt}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'help, core, ';
                $value = $this->resolveValue($context->find('alt'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
