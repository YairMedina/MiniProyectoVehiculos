<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Repository\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    private ClientRepositoryInterface $clientRepository;

    public function __construct(ClientRepositoryInterface $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function client()
    {
        $client = $this->clientRepository->all();
        return view('Client', ['clients' => ClientResource::collection($client)]);
    }

    public function show($clientId)
    {
        $data = $this->clientRepository->findClient($clientId);
        return response()->json([
            'data' => new ClientResource($data),
            'status' => 'success',
            'message' => 'exito',
        ]);

    }

    public function store(Request $request)
    {
        $data = $this->clientRepository->createClient($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => new ClientResource($data),
        ]);

    }

    public function update(Request $request, $id)
    {
        $client = $this->clientRepository->updateClient($id, $request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => new ClientResource($client),
        ]);
    }

    public function delete($id)
    {
        $deleted = $this->clientRepository->deleteClient($id);

        if ($deleted) {
            return response()->json([
                'status' => 'success',
                'message' => 'Delete client succesful',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error when delete client',
            ], 400);
        }
    }

}
