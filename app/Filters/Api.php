<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Api implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $key = getenv('TOKEN_SECRET');
        $header = $request->getServer('HTTP_AUTHORIZATION');
        if(!$header) return Services::response()
                            ->setJSON(['msg' => 'Token Required'])
                            ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        $token = explode(' ', $header)[1];
 
        try {
            JWT::decode($token, new Key($key, 'HS256'));
        } catch (\Throwable $th) {
            return Services::response()
                            ->setJSON(['msg' => 'Invalid Token'])
                            ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }
    }
 
    //--------------------------------------------------------------------
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}