<?php

namespace Sienekib\Mehael\Http;

class Response
{
    private array $headers = [];
    private int $statusCode = 200;

    public function __construct()
    {
        $this->setHeader('Access-Control-Allow-Origin', '*');
        $this->setHeader('Access-Control-Allow-Headers', 'Content-Type');
        $this->setHeader('Access-Control-Allow-Credentials', 'true');

        $method = $_SERVER['REQUEST_METHOD'] ?? null;

        if (!is_null($method) && $method === 'OPTIONS') {
            $this->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
            $this->send();
        }
    }

    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function json(mixed $data)
    {
        $this->setHeader('Content-Type', 'application/json');
        $this->send(json_encode($data, JSON_UNESCAPED_UNICODE));
    }

    public function setHeader(string $header, string $value)
    {
        $this->headers[$header] = $value;
    }

    public function send(string $content = '')
    {
        $this->sendHeaders();
        echo $content;
        exit;
    }

    private function sendHeaders()
    {
        if (!headers_sent()) {
            foreach ($this->headers as $header => $value) {
                header("$header: $value");
            }
            http_response_code($this->statusCode);
        }
    }
}
/*
<?php

namespace Sienekib\Mehael\Http;

class Response
{
    private array $headers = [];

    private int $status_code = 200;

    public function __construct()
    {
        // $this->headers = getallheaders();
        $this->setHeader('Access-Control-Allow-Origin', '*');
        $this->setHeader('Access-Control-Allow-Headers', '*');
        $this->setHeader('Access-Control-Allow-Credentials', 'true');

        if (request()->method() === 'OPTIONS') {
            $this->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
            $this->applyHeaders();
            exit;
        }
    }


    public function setStatusCode(int $status)
    {
        $this->status_code = $status;

        http_response_code($this->status_code);
    }

    public function json(mixed $data)
    {
        $data = (is_array($data)) ? $data : [$data];

        $this->setHeader("Content-Type", "application/json");
        $this->applyHeaders();

        echo json_encode($data, JSON_UNESCAPED_UNICODE);

        exit;
    }

    public function setHeader(string $type, string $value)
    {
        $this->headers[$type] = $value;
    }

    public function applyHeaders()
    {

        if (!empty($this->headers)) {
            foreach ($this->headers as $type => $value) {
                header("$type: $value");
            }
        }
        $this->headers = [];
    }
}
*/