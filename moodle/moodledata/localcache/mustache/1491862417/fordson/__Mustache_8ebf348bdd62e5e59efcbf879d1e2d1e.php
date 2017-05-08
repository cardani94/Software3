<?php

class __Mustache_8ebf348bdd62e5e59efcbf879d1e2d1e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'hasfpsearch' section
        $value = $context->find('hasfpsearch');
        $buffer .= $this->section50b8dded0ff5b2df8a56bb84d5890bd2($context, $indent, $value);

        return $buffer;
    }

    private function sectionCd40f67c442c6cf3e4e18af0c0f7a7ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'go';
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
                
                $buffer .= 'go';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50b8dded0ff5b2df8a56bb84d5890bd2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form action="{{searchurl}}" id="{{id}}" method="get" class="form-inline">
    <fieldset class="coursesearchbox invisiblefieldset">
        <label for="{{inputid}}">{{fpsearch}}</label>
        <input id="{{inputid}}" name="search" type="text" size="{{inputsize}}" value="{{value}}" class="form-control">
        <button class="btn btn-secondary" type="submit">{{#str}}go{{/str}}</button>
    </fieldset>
</form>
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
                
                $buffer .= $indent . '<form action="';
                $value = $this->resolveValue($context->find('searchurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="get" class="form-inline">
';
                $buffer .= $indent . '    <fieldset class="coursesearchbox invisiblefieldset">
';
                $buffer .= $indent . '        <label for="';
                $value = $this->resolveValue($context->find('inputid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fpsearch'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '        <input id="';
                $value = $this->resolveValue($context->find('inputid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="search" type="text" size="';
                $value = $this->resolveValue($context->find('inputsize'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="form-control">
';
                $buffer .= $indent . '        <button class="btn btn-secondary" type="submit">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCd40f67c442c6cf3e4e18af0c0f7a7ca($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </fieldset>
';
                $buffer .= $indent . '</form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
