<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mails\AccessExpiration;



class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Elenco accessi';
        $page_description = ' - Gestisci, aggiungi o elimina i accessi';
        $accesses = Access::get();

        return view('accesses.index', compact('page_title', 'page_description','accesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $domain = new Access($request->all());
         $domain->save();

         if ($domain->id) {
            return Redirect::route('accesses.index')->with('success', 'Accesso creato con successo.');
         } else {
             return Redirect::back()->withInput()->with('error', 'Errore di creazione');
         }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Access  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Access $domain, $id)
    {
        $domain = Access::where('id', $id)->firstOrFail();
        $clients = Client::where('id',$domain->client_id)->get();

        return view('accesses.show', compact('domain','clients'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Access  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Access $domain, $id)
    {
        $domain = Access::where('id', $id)->firstOrFail();
        $clients = Client::get();


        return view('accesses.edit', compact('domain','clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Access  $domain
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Access $domain)
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Access  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Access $domain)
    {
        //
    }


    public function notifyAccessExpiration(Access $domain)
    {
        // dd($domain->client);
        // $client = Client::where('id',$domain->client_id)->firstOrFail();
        Mail::to('gottardifrancesco92@gmail.com')->send(new AccessExpiration($domain));

        // if($request->ajax()){
            return array('status'=>'ok','message'=>'Email inviata correttamente');
        // }else{
        //     return Redirect::back()->with('message', trans('contact.contact_ok'));
        // }


    }




}
