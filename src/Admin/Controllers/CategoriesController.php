<?php
namespace Admin\Controllers;


use App\Repositories\CategoriesRepository;
use Core\CRUDInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class CategoriesController
 * @package Admin\Controllers
 */
class CategoriesController extends DashboardController implements CRUDInterface
{
    /**
     * @var CategoriesRepository|mixed
     */
    private $categories;

    /**
     * CategoriesController constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
        $this->categories = $container->get(CategoriesRepository::class);
    }

    /**
     * @param ServerRequestInterface|Request $request
     * @param ResponseInterface|Response $response
     * @return ResponseInterface
     */
    public function create(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        // TODO: Implement create() method.
    }

    /**
     * @param ServerRequestInterface|Request $request
     * @param ResponseInterface|Response $response
     * @return ResponseInterface
     */
    public function store(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        // TODO: Implement store() method.
    }

    /**
     * @param ServerRequestInterface|Request $request
     * @param ResponseInterface|Response $response
     * @return ResponseInterface
     */
    public function edit(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        // TODO: Implement edit() method.
    }

    /**
     * @param ServerRequestInterface|Request $request
     * @param ResponseInterface|Response $response
     * @return ResponseInterface
     */
    public function update(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        // TODO: Implement update() method.
    }

    /**
     * @param ServerRequestInterface|Request $request
     * @param ResponseInterface|Response $response
     * @return ResponseInterface
     */
    public function delete(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        // TODO: Implement delete() method.
    }
}