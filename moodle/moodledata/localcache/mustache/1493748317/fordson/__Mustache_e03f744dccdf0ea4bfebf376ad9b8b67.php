<?php

class __Mustache_e03f744dccdf0ea4bfebf376ad9b8b67 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '
';
        // 'hassocialnetworks' section
        $value = $context->find('hassocialnetworks');
        $buffer .= $this->section8f294fbe2d5c0c19892886118e26f1a8($context, $indent, $value);

        return $buffer;
    }

    private function section97d8ed523efcfe3519b36349d00c1a41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-2x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x"></i>
                    </span>
                    <span class="sr-only">{{{haslink}}}</span>
                    </a>
                ';
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
                
                $buffer .= $indent . '                    <a href = ';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= ' class = "socialicon blog" title = "';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                    <span class="fa-stack fa-2x">
';
                $buffer .= $indent . '                    <i class="fa fa-square fa-stack-2x"></i>
';
                $buffer .= $indent . '                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= ' fa-inverse fa-stack-1x"></i>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('haslink'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d30b0ddc9b54f03218d0b34e024cab7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#haslink}}
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-2x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x"></i>
                    </span>
                    <span class="sr-only">{{{haslink}}}</span>
                    </a>
                {{/haslink}}
            ';
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
                
                // 'haslink' section
                $value = $context->find('haslink');
                $buffer .= $this->section97d8ed523efcfe3519b36349d00c1a41($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f294fbe2d5c0c19892886118e26f1a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="socials_wrapper">
        <ul class="socials">
            {{#socialicons}}
                {{#haslink}}
                    <a href = {{{haslink}}} class = "socialicon blog" title = "{{{haslink}}}" alt="{{{haslink}}}" target="_blank">
                    <span class="fa-stack fa-2x">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-{{{linkicon}}} fa-inverse fa-stack-1x"></i>
                    </span>
                    <span class="sr-only">{{{haslink}}}</span>
                    </a>
                {{/haslink}}
            {{/socialicons}}
        </ul>
    </div>
';
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
                
                $buffer .= $indent . '    <div class="socials_wrapper">
';
                $buffer .= $indent . '        <ul class="socials">
';
                // 'socialicons' section
                $value = $context->find('socialicons');
                $buffer .= $this->section1d30b0ddc9b54f03218d0b34e024cab7($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
