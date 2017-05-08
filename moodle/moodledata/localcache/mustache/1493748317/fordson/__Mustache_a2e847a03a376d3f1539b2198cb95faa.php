<?php

class __Mustache_a2e847a03a376d3f1539b2198cb95faa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="fpwonderbox">
';
        $buffer .= $indent . '
';
        // 'hasfpiconnav' section
        $value = $context->find('hasfpiconnav');
        $buffer .= $this->sectionC6a4eee9624e6d764501c22b6dc068d7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'hasalert' section
        $value = $context->find('hasalert');
        $buffer .= $this->section9f6aed4e2f1d3bba1beac4cddc072928($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="fpsearch">
';
        if ($partial = $this->mustache->loadPartial('theme_fordson/FPcourse_search_form')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'hasfptextbox' section
        $value = $context->find('hasfptextbox');
        $buffer .= $this->section6cf4dbfbadbfada1381e1e64e14ef764($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasfptextboxlogout' section
        $value = $context->find('hasfptextboxlogout');
        $buffer .= $this->section1435592a81fee5d5bf87579d1a847379($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasmarkettiles' section
        $value = $context->find('hasmarkettiles');
        $buffer .= $this->sectionC9f74543e029cdf26b233e8526b796e7($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section46ec7010c85566a76c34a74af713cfa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="fpicon">
                <a href = {{{link}}} title = "{{{link}}}" alt="{{{link}}}" id="button">
                    <div class="navicon" align="center">
                        <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                    </div>
                    {{{linktext}}}
                </a>
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
                
                $buffer .= $indent . '            <div class="fpicon">
';
                $buffer .= $indent . '                <a href = ';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= ' title = "';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" id="button">
';
                $buffer .= $indent . '                    <div class="navicon" align="center">
';
                $buffer .= $indent . '                        <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section043db039d76d55a2583701ceaba4f1fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasicon}}
            <div class="fpicon">
                <a href = {{{link}}} title = "{{{link}}}" alt="{{{link}}}" id="button">
                    <div class="navicon" align="center">
                        <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                    </div>
                    {{{linktext}}}
                </a>
            </div>
            {{/hasicon}}
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
                
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->section46ec7010c85566a76c34a74af713cfa9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b37af3460c8470a541e01c2dceebc62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="fpicon">
                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
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
                
                $buffer .= $indent . '                <div class="fpicon">
';
                $buffer .= $indent . '                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider">
';
                $buffer .= $indent . '                        <div class="navicon" align="center">
';
                $buffer .= $indent . '                            <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8e3b59c14c72b06de6b6009dd2e1d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasicon}}
                <div class="fpicon">
                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
            {{/hasicon}}
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
                
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->section8b37af3460c8470a541e01c2dceebc62($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section091d9ef34c90069e091180d10f7450e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="fpiconcreate">
                    <a href = {{{link}}} title = "{{{link}}}" alt="{{{link}}}" id="button">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
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
                
                $buffer .= $indent . '                <div class="fpiconcreate">
';
                $buffer .= $indent . '                    <a href = ';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= ' title = "';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= $value;
                $buffer .= '" id="button">
';
                $buffer .= $indent . '                        <div class="navicon" align="center">
';
                $buffer .= $indent . '                            <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= $value;
                $buffer .= '"></i>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section959a90420a41e8d0834dbc677174635a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasicon}}
                <div class="fpiconcreate">
                    <a href = {{{link}}} title = "{{{link}}}" alt="{{{link}}}" id="button">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
            {{/hasicon}}
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
                
                // 'hasicon' section
                $value = $context->find('hasicon');
                $buffer .= $this->section091d9ef34c90069e091180d10f7450e0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d285c3964752fd82dcf918f9b219d8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="collapse" id="fpslider">
        {{{slidetextbox}}}
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
                
                $buffer .= $indent . '    <div class="collapse" id="fpslider">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('slidetextbox'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6a4eee9624e6d764501c22b6dc068d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="fpstartwrap">
<div class="fpstart">
    <div class="iconset">

        {{#fpiconnav}}
            {{#hasicon}}
            <div class="fpicon">
                <a href = {{{link}}} title = "{{{link}}}" alt="{{{link}}}" id="button">
                    <div class="navicon" align="center">
                        <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                    </div>
                    {{{linktext}}}
                </a>
            </div>
            {{/hasicon}}
        {{/fpiconnav}}

        {{#fpslideicon}}
            {{#hasicon}}
                <div class="fpicon">
                    <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
            {{/hasicon}}
        {{/fpslideicon}}

        {{#fpcreateicon}}
            {{#hasicon}}
                <div class="fpiconcreate">
                    <a href = {{{link}}} title = "{{{link}}}" alt="{{{link}}}" id="button">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
            {{/hasicon}}
        {{/fpcreateicon}}
        
    </div>
</div>
</div>
{{#hasslidetextbox}}
    <div class="collapse" id="fpslider">
        {{{slidetextbox}}}
    </div>
{{/hasslidetextbox}}
<div style="clear:both;"></div>
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
                
                $buffer .= $indent . '<div class="fpstartwrap">
';
                $buffer .= $indent . '<div class="fpstart">
';
                $buffer .= $indent . '    <div class="iconset">
';
                $buffer .= $indent . '
';
                // 'fpiconnav' section
                $value = $context->find('fpiconnav');
                $buffer .= $this->section043db039d76d55a2583701ceaba4f1fa($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'fpslideicon' section
                $value = $context->find('fpslideicon');
                $buffer .= $this->sectionE8e3b59c14c72b06de6b6009dd2e1d23($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'fpcreateicon' section
                $value = $context->find('fpcreateicon');
                $buffer .= $this->section959a90420a41e8d0834dbc677174635a($context, $indent, $value);
                $buffer .= $indent . '        
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '</div>
';
                // 'hasslidetextbox' section
                $value = $context->find('hasslidetextbox');
                $buffer .= $this->section5d285c3964752fd82dcf918f9b219d8b($context, $indent, $value);
                $buffer .= $indent . '<div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f6aed4e2f1d3bba1beac4cddc072928(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="alertbox">
        <div class="alertmessage">
        {{{alertbox}}}
        </div>
    </div>
    <div style="clear:both;"></div>
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
                
                $buffer .= $indent . '    <div class="alertbox">
';
                $buffer .= $indent . '        <div class="alertmessage">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('alertbox'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cf4dbfbadbfada1381e1e64e14ef764(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<hr>
    <div class="fptextbox">
        {{{fptextbox}}}
    </div>
    <div style="clear:both;"></div>
<hr>
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
                
                $buffer .= $indent . '<hr>
';
                $buffer .= $indent . '    <div class="fptextbox">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('fptextbox'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div style="clear:both;"></div>
';
                $buffer .= $indent . '<hr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1435592a81fee5d5bf87579d1a847379(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="fptextbox">
        {{{fptextboxlogout}}}
    </div>
    <div style="clear:both;"></div>
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
                
                $buffer .= $indent . '    <div class="fptextbox">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('fptextboxlogout'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88533f946b1a3a1205a8cb77a025e2cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        <div class="col-md-4">
        <div class="market-tile"> 
            <h3 class="card-title">{{{title}}}</h3>
            <div class="marketcontent {{{tileimage}}}">
            <p>{{{content}}}<p>
            </div>
            {{{button}}}  
        </div>
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="col-md-4">
';
                $buffer .= $indent . '        <div class="market-tile"> 
';
                $buffer .= $indent . '            <h3 class="card-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <div class="marketcontent ';
                $value = $this->resolveValue($context->find('tileimage'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '<p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= $value;
                $buffer .= '  
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDecb5dbffcb2dc53fd2e2671f5a8168b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#hastile}}

        <div class="col-md-4">
        <div class="market-tile"> 
            <h3 class="card-title">{{{title}}}</h3>
            <div class="marketcontent {{{tileimage}}}">
            <p>{{{content}}}<p>
            </div>
            {{{button}}}  
        </div>
        </div>

        {{/hastile}}
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
                
                // 'hastile' section
                $value = $context->find('hastile');
                $buffer .= $this->section88533f946b1a3a1205a8cb77a025e2cd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9f74543e029cdf26b233e8526b796e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="markettiles">
    <div class="container-fluid">
    <div class="row">

        {{#markettiles}}
        {{#hastile}}

        <div class="col-md-4">
        <div class="market-tile"> 
            <h3 class="card-title">{{{title}}}</h3>
            <div class="marketcontent {{{tileimage}}}">
            <p>{{{content}}}<p>
            </div>
            {{{button}}}  
        </div>
        </div>

        {{/hastile}}
        {{/markettiles}}

    </div>
    </div>
</div>
<div style="clear:both;"></div>
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
                
                $buffer .= $indent . '<div class="markettiles">
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '
';
                // 'markettiles' section
                $value = $context->find('markettiles');
                $buffer .= $this->sectionDecb5dbffcb2dc53fd2e2671f5a8168b($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '<div style="clear:both;"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
