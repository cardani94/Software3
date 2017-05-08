<?php

class __Mustache_7c0cc6c15828c928207e704039e6de4b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div id="intro" class="box searchbox boxaligncenter">
';
        $buffer .= $indent . '    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section99929cffdc69a9a371469c91d3361ae3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="box generalbox boxaligncenter">
';
        $buffer .= $indent . '    <script type="text/javascript" src="';
        $value = $this->resolveValue($context->find('scripturl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></script>
';
        $buffer .= $indent . '    <form id="searchform" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="get">
';
        $buffer .= $indent . '        <table class="searchbox table table-striped" id="form" cellpadding="10">
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    <label for="words">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section49b940fd06a798f8e7819beb6403f415($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <input type="hidden" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" name="id">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1">
';
        $buffer .= $indent . '                    <input type="text" class="form-control" name="words" id="words" value="';
        $value = $this->resolveValue($context->find('words'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    <label for="phrase">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section007601d3829265a079ca4fc9cc9c61ad($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1">
';
        $buffer .= $indent . '                    <input type="text" class="form-control" name="phrase" id="phrase" value="';
        $value = $this->resolveValue($context->find('phrase'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    <label for="notwords">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9e965866c64a3fd4d807591d47160622($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1">
';
        $buffer .= $indent . '                    <input type="text" class="form-control" name="notwords" id="notwords" value="';
        $value = $this->resolveValue($context->find('notwords'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        // 'showfullwords' section
        $value = $context->find('showfullwords');
        $buffer .= $this->section1eacbe11eac8c57d650a6e069d6e351d($context, $indent, $value);
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFbe692963e46f75b5c02f8b460cba735($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1 text-nowrap form-inline">
';
        $buffer .= $indent . '                    <input type="checkbox" name="timefromrestrict" value="1" onclick="return lockoptions(\'searchform\', \'timefromrestrict\', timefromitems)" ';
        // 'datefromchecked' section
        $value = $context->find('datefromchecked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('datefromfields'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromday" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfrommonth" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromyear" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromhour" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromminute" value="0">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2493ad2b2fd563c6bfa895bb8f230388($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1 text-nowrap form-inline">
';
        $buffer .= $indent . '                    <input type="checkbox" name="timetorestrict" value="1" onclick="return lockoptions(\'searchform\', \'timetorestrict\', timetoitems)" ';
        // 'datetochecked' section
        $value = $context->find('datetochecked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('datetofields'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    <input type="hidden" name="htoday" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="htomonth" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="htoyear" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="htohour" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="htominute" value="0">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    <label for="menuforumid">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC382849062e67f2e28649a8a1c9cee46($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1">
';
        $buffer .= $indent . '                    <select name="forumid" id="menuforumid" class="form-control">
';
        // 'forumoptions' section
        $value = $context->find('forumoptions');
        $buffer .= $this->sectionB66cd651c681f46a91963c1886a0a90f($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    <label for="subject">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBf6f0a37d0eced58edee66c901fd1056($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1">
';
        $buffer .= $indent . '                    <input type="text" class="form-control" name="subject" id="subject" value="';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td class="c0 text-xs-right">
';
        $buffer .= $indent . '                    <label for="user">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section51faccaed472b4f1632c8c743dfad925($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '                <td class="c1">
';
        $buffer .= $indent . '                    <input type="text" class="form-control" name="user" id="user" value="';
        $value = $this->resolveValue($context->find('user'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <td> </td>
';
        $buffer .= $indent . '                <td class="submit">
';
        $buffer .= $indent . '                    <button type="submit" class="btn btn-primary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF47c768210ceecaea95768df40cb4c27($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                </td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </table>
';
        $buffer .= $indent . '    </form>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section9d8b22088d4cae8dab6e09bce83e3d70($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section99929cffdc69a9a371469c91d3361ae3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforumintro, forum';
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
                
                $buffer .= 'searchforumintro, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49b940fd06a798f8e7819beb6403f415(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchwords, forum';
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
                
                $buffer .= 'searchwords, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section007601d3829265a079ca4fc9cc9c61ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchphrase, forum';
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
                
                $buffer .= 'searchphrase, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e965866c64a3fd4d807591d47160622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchnotwords, forum';
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
                
                $buffer .= 'searchnotwords, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ae13f3791f0313566f45cfad7756f8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchfullwords, forum';
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
                
                $buffer .= 'searchfullwords, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1eacbe11eac8c57d650a6e069d6e351d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr>
                    <td class="c0 text-xs-right">
                        <label for="fullwords">{{#str}}searchfullwords, forum{{/str}}</label>
                    </td>
                    <td class="c1">
                        <input type="text" class="form-control" name="fullwords" id="fullwords" value="{{fullwords}}">
                    </td>
                </tr>
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
                
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <td class="c0 text-xs-right">
';
                $buffer .= $indent . '                        <label for="fullwords">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6ae13f3791f0313566f45cfad7756f8d($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td class="c1">
';
                $buffer .= $indent . '                        <input type="text" class="form-control" name="fullwords" id="fullwords" value="';
                $value = $this->resolveValue($context->find('fullwords'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbe692963e46f75b5c02f8b460cba735(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchdatefrom, forum';
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
                
                $buffer .= 'searchdatefrom, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
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
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2493ad2b2fd563c6bfa895bb8f230388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchdateto, forum';
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
                
                $buffer .= 'searchdateto, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC382849062e67f2e28649a8a1c9cee46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchwhichforums, forum';
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
                
                $buffer .= 'searchwhichforums, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
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
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB66cd651c681f46a91963c1886a0a90f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <option value="{{value}}" {{#selected}}selected{{/selected}}>{{name}}</option>
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
                
                $buffer .= $indent . '                            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf6f0a37d0eced58edee66c901fd1056(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchsubject, forum';
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
                
                $buffer .= 'searchsubject, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51faccaed472b4f1632c8c743dfad925(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchuser, forum';
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
                
                $buffer .= 'searchuser, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF47c768210ceecaea95768df40cb4c27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforums, forum';
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
                
                $buffer .= 'searchforums, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d8b22088d4cae8dab6e09bce83e3d70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        lockoptions_timetoitems();
        lockoptions_timefromitems();
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
                
                $buffer .= $indent . '        lockoptions_timetoitems();
';
                $buffer .= $indent . '        lockoptions_timefromitems();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
