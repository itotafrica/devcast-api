<?php

/**
 * This file is part of DevsCast.
 * (c) Bernard Ng <ngandubernard@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with the source code.
 */

namespace Framework\Renderer\Twig\Extensions;

use Framework\Auth\AuthInterface;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

/**
 * Class AuthTwigExtension
 * @package Framework\Renderer\Twig\Extensions
 * @author bernard-ng <ngandubernard@gmail.com>
 */
class AuthTwigExtension extends AbstractExtension implements GlobalsInterface
{

    /** @var AuthInterface */
    private $auth;

    /**
     * AuthTwigExtension constructor.
     * @param AuthInterface $auth
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Returns a list of global variables to add to the existing list.
     *
     * @return array An array of global variables
     */
    public function getGlobals(): array
    {
        return [
            'currentUser' => $this->auth->getUser()
        ];
    }
}
