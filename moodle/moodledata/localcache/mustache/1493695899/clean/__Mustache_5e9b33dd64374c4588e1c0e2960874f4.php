<?php

class __Mustache_5e9b33dd64374c4588e1c0e2960874f4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'hasinstructions' section
        $value = $context->find('hasinstructions');
        $buffer .= $this->section88fd6839210c702eb248f05c92b3ed29($context, $indent, $value);
        // 'hasinstructions' inverted section
        $value = $context->find('hasinstructions');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="loginbox clearfix onecolumn">
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="loginpanel">
';
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->section13d6dac343c61760b3607f195bebccd5($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <h2>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section40ab32d843ea367ab8a69a6ea2e65476($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="subcontent loginsub">
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionD7b9ddcb05e8d8aba8f16fcf28ed8e70($context, $indent, $value);
        $buffer .= $indent . '            <form action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="post" id="login" ';
        // 'passwordautocomplete' inverted section
        $value = $context->find('passwordautocomplete');
        if (empty($value)) {
            
            $buffer .= 'autocomplete="off"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '                <div class="loginform">
';
        $buffer .= $indent . '                    <div class="form-label">
';
        $buffer .= $indent . '                        <label for="username">
';
        // 'canloginbyemail' inverted section
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                                ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        // 'canloginbyemail' section
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section0fa1a7c8782c64bb165b68767ea05430($context, $indent, $value);
        $buffer .= $indent . '                        </label>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="form-input">
';
        $buffer .= $indent . '                        <input type="text" name="username" id="username" size="15" value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="clearer"><!-- --></div>
';
        $buffer .= $indent . '                    <div class="form-label">
';
        $buffer .= $indent . '                        <label for="password">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="form-input">
';
        $buffer .= $indent . '                        <input type="password" name="password" id="password" size="15" value="" ';
        // 'passwordautocomplete' inverted section
        $value = $context->find('passwordautocomplete');
        if (empty($value)) {
            
            $buffer .= 'autocomplete="off"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="clearer"><!-- --></div>
';
        // 'rememberusername' section
        $value = $context->find('rememberusername');
        $buffer .= $this->sectionDd35620c34591e487ad8aefe5a22d6b1($context, $indent, $value);
        $buffer .= $indent . '                <div class="clearer"><!-- --></div>
';
        $buffer .= $indent . '                <input id="anchor" type="hidden" name="anchor" value="" />
';
        $buffer .= $indent . '                <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '                <input type="submit" id="loginbtn" value=';
        // 'quote' section
        $value = $context->find('quote');
        $buffer .= $this->section5860067bda3357cbf2ce340f4d8846ac($context, $indent, $value);
        $buffer .= ' />
';
        $buffer .= $indent . '                <div class="forgetpass">
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section75744af61ed4d4a7233f5e316671ca4f($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="desc">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section946f040476794b323defa7b00688109b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('cookieshelpiconformatted'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        // 'canloginasguest' section
        $value = $context->find('canloginasguest');
        $buffer .= $this->section0240962df54c59464b8b722d3d797f98($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        // 'hasinstructions' section
        $value = $context->find('hasinstructions');
        $buffer .= $this->section281225c7b7296fa8b1a358c60397ff43($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasidentityproviders' section
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionD76952cc2b747a74d719d4a462c816e5($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC84be3efc68c89c43522ecca9a80149f($context, $indent, $value);

        return $buffer;
    }

    private function section88fd6839210c702eb248f05c92b3ed29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="loginbox clearfix twocolumns">
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
                
                $buffer .= $indent . '<div class="loginbox clearfix twocolumns">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
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
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13d6dac343c61760b3607f195bebccd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="skiplinks">
                <a class="skip" href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
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
                
                $buffer .= $indent . '            <div class="skiplinks">
';
                $buffer .= $indent . '                <a class="skip" href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40ab32d843ea367ab8a69a6ea2e65476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' login ';
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
                
                $buffer .= ' login ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7b9ddcb05e8d8aba8f16fcf28ed8e70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="loginerrors">
                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                    {{{errorformatted}}}
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
                
                $buffer .= $indent . '                <div class="loginerrors">
';
                $buffer .= $indent . '                    <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('errorformatted'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
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
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
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
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fa1a7c8782c64bb165b68767ea05430(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#str}} usernameemail {{/str}}
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
                
                $buffer .= $indent . '                                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
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
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
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
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAde9318c94c2f3a55f9a22a57e193ad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rememberusername, admin ';
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
                
                $buffer .= ' rememberusername, admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd35620c34591e487ad8aefe5a22d6b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="rememberpass">
                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                        <label for="rememberusername">{{#str}} rememberusername, admin {{/str}}</label>
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
                
                $buffer .= $indent . '                    <div class="rememberpass">
';
                $buffer .= $indent . '                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1" ';
                // 'username' section
                $value = $context->find('username');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                        <label for="rememberusername">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAde9318c94c2f3a55f9a22a57e193ad0($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5860067bda3357cbf2ce340f4d8846ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} login {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section40ab32d843ea367ab8a69a6ea2e65476($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75744af61ed4d4a7233f5e316671ca4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forgotten ';
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
                
                $buffer .= ' forgotten ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section946f040476794b323defa7b00688109b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cookiesenabled ';
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
                
                $buffer .= ' cookiesenabled ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ed3c7b6104aa334de470f79728beebf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' someallowguest ';
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
                
                $buffer .= ' someallowguest ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bb51e24d0fd02006f3e489e80a0b365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loginguest ';
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
                
                $buffer .= ' loginguest ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7d848bbe73d55bc84081585c15d0549(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} loginguest {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4bb51e24d0fd02006f3e489e80a0b365($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0240962df54c59464b8b722d3d797f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="subcontent guestsub">
                <div class="desc">{{#str}} someallowguest {{/str}}</div>
                <form action="{{loginurl}}" method="post" id="guestlogin">
                    <div class="guestform">
                        <input type="hidden" name="username" value="guest" />
                        <input type="hidden" name="password" value="guest" />
                        <input type="submit" value={{#quote}}{{#str}} loginguest {{/str}}{{/quote}} />
                    </div>
                </form>
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
                
                $buffer .= $indent . '            <div class="subcontent guestsub">
';
                $buffer .= $indent . '                <div class="desc">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7ed3c7b6104aa334de470f79728beebf($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                    <div class="guestform">
';
                $buffer .= $indent . '                        <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                        <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                        <input type="submit" value=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionD7d848bbe73d55bc84081585c15d0549($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </form>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e7e1656a410e28ad447bc910c287930(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' firsttime ';
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
                
                $buffer .= ' firsttime ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b89ece2906ec5b5e1981e97e4664025(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' startsignup ';
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
                
                $buffer .= ' startsignup ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section862e344df30a1185502b9ac2cd1ab6e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} startsignup {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6b89ece2906ec5b5e1981e97e4664025($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4066561410d2bae322e195b7991bf4a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="signupform">
                        <form action="{{signupurl}}" method="get" id="signup">
                            <div>
                                <input type="submit" value={{#quote}}{{#str}} startsignup {{/str}}{{/quote}} />
                            </div>
                        </form>
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
                
                $buffer .= $indent . '                    <div class="signupform">
';
                $buffer .= $indent . '                        <form action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '                            <div>
';
                $buffer .= $indent . '                                <input type="submit" value=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section862e344df30a1185502b9ac2cd1ab6e6($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </form>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section281225c7b7296fa8b1a358c60397ff43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="signuppanel">
            <h2>{{#str}} firsttime {{/str}}</h2>
            <div class="subcontent">
                {{{instructions}}}
                {{#cansignup}}
                    <div class="signupform">
                        <form action="{{signupurl}}" method="get" id="signup">
                            <div>
                                <input type="submit" value={{#quote}}{{#str}} startsignup {{/str}}{{/quote}} />
                            </div>
                        </form>
                    </div>
                {{/cansignup}}
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
                
                $buffer .= $indent . '        <div class="signuppanel">
';
                $buffer .= $indent . '            <h2>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9e7e1656a410e28ad447bc910c287930($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '            <div class="subcontent">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'cansignup' section
                $value = $context->find('cansignup');
                $buffer .= $this->section4066561410d2bae322e195b7991bf4a2($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
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
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4819407b095b119a7954bf1b74f06494(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{>core/pix_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/pix_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3eef06919dcc5ab11fbc5256a45c3c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="potentialidp">
                        <a href="{{url}}" title={{#quote}}{{name}}{{/quote}}>
                            {{#icon}}
                                {{>core/pix_icon}}
                            {{/icon}}
                            {{name}}
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
                
                $buffer .= $indent . '                    <div class="potentialidp">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= '>
';
                // 'icon' section
                $value = $context->find('icon');
                $buffer .= $this->section4819407b095b119a7954bf1b74f06494($context, $indent, $value);
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD76952cc2b747a74d719d4a462c816e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="subcontent potentialidps">
            <h6>{{#str}} potentialidps, auth {{/str}}</h6>
            <div class="potentialidplist">
                {{#identityproviders}}
                    <div class="potentialidp">
                        <a href="{{url}}" title={{#quote}}{{name}}{{/quote}}>
                            {{#icon}}
                                {{>core/pix_icon}}
                            {{/icon}}
                            {{name}}
                        </a>
                    </div>
                {{/identityproviders}}
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
                
                $buffer .= $indent . '        <div class="subcontent potentialidps">
';
                $buffer .= $indent . '            <h6>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '            <div class="potentialidplist">
';
                // 'identityproviders' section
                $value = $context->find('identityproviders');
                $buffer .= $this->sectionC3eef06919dcc5ab11fbc5256a45c3c2($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87d4cc44cef23dbc2d4678a71be62fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        $(function() {
            M.util.focus_login_error(Y);
        });
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
                
                $buffer .= $indent . '        $(function() {
';
                $buffer .= $indent . '            M.util.focus_login_error(Y);
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5611ddd71cb2a428d666e18c4d5ac2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            $(function() {
                M.util.focus_login_form(Y);
            });
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
                
                $buffer .= $indent . '            $(function() {
';
                $buffer .= $indent . '                M.util.focus_login_form(Y);
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC84be3efc68c89c43522ecca9a80149f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core/yui\'], function($, Y) {
    {{#error}}
        $(function() {
            M.util.focus_login_error(Y);
        });
    {{/error}}
    {{^error}}
        {{#autofocusform}}
            $(function() {
                M.util.focus_login_form(Y);
            });
        {{/autofocusform}}
    {{/error}}
    });
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
                
                $buffer .= $indent . '    require([\'jquery\', \'core/yui\'], function($, Y) {
';
                // 'error' section
                $value = $context->find('error');
                $buffer .= $this->section87d4cc44cef23dbc2d4678a71be62fe6($context, $indent, $value);
                // 'error' inverted section
                $value = $context->find('error');
                if (empty($value)) {
                    
                    // 'autofocusform' section
                    $value = $context->find('autofocusform');
                    $buffer .= $this->sectionF5611ddd71cb2a428d666e18c4d5ac2e($context, $indent, $value);
                }
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
