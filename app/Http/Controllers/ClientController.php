<?php

namespace App\Http\Controllers;

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
        return view('Client', ['clients' => $client]);
    }

    public function show($clientId)
    {
        return response()->json([
            'data' => $this->clientRepository->findClient($clientId),
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
            'data' => $data,
        ]);

    }

    public function update(Request $request, $id)
    {
        $client = $this->clientRepository->updateClient($id, $request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $client,
        ]);
    }

    public function delete($id)
    {
        $data = Client::findOrFail($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'exito',
            'data' => $data,
        ]);
    }

}
