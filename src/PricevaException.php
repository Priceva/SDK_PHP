<?php
/**
 * Created by PhpStorm.
 * User: Stas
 * Date: 08.10.2018
 * Time: 17:57
 */

namespace Priceva;


use Exception;

/**
 * Class Exception
 *
 * @package Priceva
 */
class PricevaException extends Exception
{
    private $errors = [
        '400' => 'Your request caused an error. You can not get the result.',
        '401' => 'Authorization failed',
    ];

    /**
     * Exception constructor.
     *
     * @param null $message
     * @param int  $code
     */
    public function __construct( $message = null, $code = 0 )
    {
        if( isset($this->errors[ $code ]) ){
            $message = $this->errors[ $code ];
        }

        parent::__construct($message, $code);
    }
}
