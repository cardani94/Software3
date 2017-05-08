<?php

class __Mustache_32fb2a4345b7e7babab1b80a2e45ca7d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="file-picker fp-dlg">
';
        $buffer .= $indent . '    <p class="fp-dlg-text"></p>
';
        $buffer .= $indent . '    <a class="fp-dlg-butoverwrite btn btn-primary" href="#">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section56a613b491da75d7179954fcafdb2b7d($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    <a class="fp-dlg-butrename btn btn-primary" href="#"></a>
';
        $buffer .= $indent . '    <a class="fp-dlg-butcancel btn btn-secondary" href="#">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    <br/>
';
        $buffer .= $indent . '    <a class="fp-dlg-butoverwriteall btn btn-primary" href="#">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC6fbe9197e8c376c7b676eb4f8b44a2c($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    <a class="fp-dlg-butrenameall btn btn-primary" href="#">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC56d9658bdd8c147caee790f43743d3c($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section56a613b491da75d7179954fcafdb2b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overwrite, repository';
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
                
                $buffer .= 'overwrite, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
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
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6fbe9197e8c376c7b676eb4f8b44a2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overwriteall, repository';
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
                
                $buffer .= 'overwriteall, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC56d9658bdd8c147caee790f43743d3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'renameall, repository';
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
                
                $buffer .= 'renameall, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
