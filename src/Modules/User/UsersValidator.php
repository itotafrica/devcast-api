<?php
/**
 * This file is part of DevsCast.
 * (c) Bernard Ng <ngandubernard@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with the source code.
 */

namespace App\Validators;

use Framework\Repositories\ValidatorInterface;
use Respect\Validation\Validator as v;

/**
 * Class UsersValidator
 * @package App\Repositories\Validators
 * @author bernard-ng, https://bernard-ng.github.io
 */
abstract class UsersValidator implements ValidatorInterface
{

    /**
     * @var array
     */
    private static $loginValidationRules;

    /**
     * Retrieve validation rules
     * @return array
     */
    public static function getValidationRules(): array
    {
        // TODO: Implement getValidationRules() method.
    }

    /**
     * Retrieve update validation rules
     * @return array
     */
    public static function getUpdateValidationRules(): array
    {
        // TODO: Implement getUpdateValidationRules() method.
    }

    /**
     * Retrieve the list of storeable fields
     * @return array
     */
    public static function getStoreAbleFields(): array
    {
        // TODO: Implement getStoreAbleFields() method.
    }

    /**
     * Retrieve the list of updateable fields
     * @return array
     */
    public static function getUpdateAbleFields(): array
    {
        // TODO: Implement getUpdateAbleFields() method.
    }


    /**
     * Retrieve validations rules for login action
     * @return array
     */
    public static function getLoginValidationRules(): array
    {
        if (is_null(self::$loginValidationRules)) {
            self::$loginValidationRules = [
                'email' => v::notEmpty()->email()->setName('Email'),
                'password' => v::notEmpty()->setName('Password')
            ];
        }
        return self::$loginValidationRules;
    }
}