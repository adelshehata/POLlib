<?php
//Parsonline/Utils/RegexPatterns.php
/**
 * Defines Parsonline_Utils_RegexPatterns class.
 * Parsonline
 * 
 * Copyright (c) 2010-2011-2012 ParsOnline, Inc. (www.parsonline.com)
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 * 
 * @copyright  Copyright (c) 2010-2011-2012 ParsOnline, Inc. (www.parsonline.com)
 * @license    Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @category    Parsonline
 * @author      Farzad Ghanei <f.ghanei@parsonline.com>
 * @version     0.0.1 2010-04-14
 */

/**
 * Parsonline_Utils_RegexPatterns
 *
 * Provides static values for common regular expression patterns.
 */
class Parsonline_Utils_RegexPatterns
{
    /**
     * Regex pattern for IP address v4
     *
     * @staticvar   string
     */
    public static $IPv4 = '(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)';
}
