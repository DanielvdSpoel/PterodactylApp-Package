<?php

namespace DanielvdSpoel\PterodactylApp\Controllers;

use Pterodactyl\Models\Server;
use Pterodactyl\Transformers\Api\Client\StatsTransformer;
use Pterodactyl\Http\Controllers\Api\Client\ClientApiController;
use Pterodactyl\Http\Requests\Api\Client\Servers\GetServerRequest;

class ApiController extends ClientApiController
{
    /**
     * Return the version of the package.
     *
     * @return array
     */
    public function index()
    {
        return response()->json([
            'enabled' => 'true',
            'version' => '1.0.0'
        ]);

    }

    /**
     * Return the daemon token for a server.
     *
     * @param \Pterodactyl\Http\Requests\Api\Client\Servers\GetServerRequest $request
     * @return array
     */
    public function console(GetServerRequest $request): array
    {
        $server = $request->getModel(Server::class);
        return response()->json([
            'server' => $server->id,
            'key' => $server->key()
        ]);
        
    }
        
    
}
