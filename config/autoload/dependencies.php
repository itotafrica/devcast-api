<?php

/**
 * This file is part of DevsCast.
 * (c) Bernard Ng <ngandubernard@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with the source code.
 */

use App\Authenticators\DatabaseAuthenticator;
use App\Handlers\ErrorHandler;
use App\Handlers\NotAllowedHandler;
use App\Handlers\NotFoundHandler;
use App\Handlers\PhpErrorHandler;
use App\Middlewares\EnableAPIMiddleware;
use Awurth\SlimValidation\Validator;
use Framework\Auth\AuthInterface;
use Framework\Database\DatabaseInterface;
use Framework\Database\Mysql\MysqlDatabase;
use Framework\Database\Mysql\MysqlPDOFactory;
use Framework\Middleware\EnableCORSMiddleware;
use Framework\Renderer\RendererInterface;
use Framework\Renderer\Twig\Extensions\AssetsTwigExtension;
use Framework\Renderer\Twig\TwigRenderer;
use Framework\Renderer\Twig\TwigRendererFactory;
use Framework\Session\PHPSession;
use Framework\Session\SessionInterface;

use function DI\get;
use function DI\create;
use function DI\factory;

return [

    // Override Slim default error handlers to use custom error pages
    "errorHandler" => get(ErrorHandler::class),
    "phpErrorHandler" => get(PhpErrorHandler::class),
    "notAllowedHandler" => get(NotAllowedHandler::class),
    "notFoundHandler" => get(NotFoundHandler::class),

    // Renderer
    RendererInterface::class => get(TwigRenderer::class),
    TwigRenderer::class => factory(TwigRendererFactory::class),

    // Database
    PDO::class => factory(MysqlPDOFactory::class),
    DatabaseInterface::class => get(MysqlDatabase::class),
    Validator::class => create(Validator::class)->constructor(false),

    // Session
    SessionInterface::class => create(PHPSession::class),

    // Authentication
    AuthInterface::class => get(DatabaseAuthenticator::class),

    // Twig Extensions
    AssetsTwigExtension::class => create(AssetsTwigExtension::class)
        ->constructor(evalbool(getenv('APP_CACHE_BUSTING'))),

    // Middlewares
    EnableCORSMiddleware::class => create(EnableCORSMiddleware::class)
        ->constructor(get('cors.trustedOrigins')),

    EnableAPIMiddleware::class => create(EnableAPIMiddleware::class)
        ->constructor(evalBool(getenv('API_ENABLE')))
];
