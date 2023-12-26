<?php

namespace Sienekib\Mehael\Bootstrap;

use PDO;
use Sienekib\Mehael\Database\Concerns\Connection;
use Sienekib\Mehael\Http\Request;
use Sienekib\Mehael\Http\Response;
use Sienekib\Mehael\Support\Session;
use Sienekib\Mehael\Router\Anotation\Route;
use Sienekib\Mehael\Exceptions\Whoops;

class Application
{
	private Request $request;
	private Response $response;
	private Route $route;
	private Connection $connection;
	private $whoops = null;
	protected Session $session;

	public function __construct()
	{
		$this->request = new Request();
		$this->response = new Response();
		$this->route = new Route($this->request, $this->response);
		$this->connection = new Connection();
		$this->whoops = Whoops::lookUp();
		$this->session = session();
	}

	public function start()
	{
		try {
			$this->session->start();
			$this->connection->initDBConnection();
			$this->route->dispatch();
			session()->destroyFlash();
		} catch (\Exception $e) {
			$this->whoops->handleException($e);
		}
	}

	public function __get($property)
	{
		return $this->$property ?? null;
	}
}
