<?php

/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2021 RocketTheme, LLC
 * @license   Dual License: MIT or GNU/GPLv2 and later
 *
 * http://opensource.org/licenses/MIT
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Gantry Framework code that extends GPL code is considered GNU/GPLv2 and later
 */

namespace Gantry\Component\Config;

/**
 * Class ValidationException
 * @package Gantry\Component\Config
 */
class ValidationException extends \RuntimeException
{
    /** @var array */
    protected $messages = [];

    /**
     * @param array $messages
     * @return $this
     */
    public function setMessages(array $messages = [])
    {
        $this->messages = $messages;

        // TODO: add translation.
        $this->message = sprintf('Form validation failed:') . ' ' . $this->message;

        foreach ($messages as $variable => &$list) {
            $list = array_unique($list);
            foreach ($list as $message) {
                $this->message .= "<br/>$message";
            }
        }

        return $this;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
