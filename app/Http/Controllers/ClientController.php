<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Domain;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Elenco clienti';
        $page_description = ' - Gestisci, aggiungi o elimina i clienti';
        $clients = Client::get();

        return view('clients.index', compact('page_title', 'page_description','clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $client = new Client($request->all());
         $client->save();

         if ($client->id) {
            return Redirect::route('clients.index')->with('success', 'Cliente creato con successo.');
         } else {
             return Redirect::back()->withInput()->with('error', 'Errore di creazione');
         }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client, $id)
    {
        $client = Client::where('id', $id)->firstOrFail();
        $domains = Domain::where('id', $client->id)->get();


        return view('clients.show', compact('client','domains'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, $id)
    {
        $client = Client::where('id', $id)->firstOrFail();
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Client $client)
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
