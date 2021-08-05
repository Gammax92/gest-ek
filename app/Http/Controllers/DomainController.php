<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mails\DomainExpiration;



class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Elenco domaini';
        $page_description = ' - Gestisci, aggiungi o elimina i domaini';
        $domains = Domain::get();

        return view('domains.index', compact('page_title', 'page_description','domains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::get();
        return view('domains.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $domain = new Domain($request->all());
         $domain->save();

         if ($domain->id) {
            return Redirect::route('domains.index')->with('success', 'Dominio creato con successo.');
         } else {
             return Redirect::back()->withInput()->with('error', 'Errore di creazione');
         }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain, $id)
    {
        $domain = Domain::where('id', $id)->firstOrFail();
        $clients = Client::where('id',$domain->client_id)->get();

        return view('domains.show', compact('domain','clients'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit(Domain $domain, $id)
    {
        $domain = Domain::where('id', $id)->firstOrFail();
        $clients = Client::get();


        return view('domains.edit', compact('domain','clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Domain $domain)
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domain $domain)
    {
        //
    }


    public function notifyDomainExpiration(Domain $domain)
    {
        // dd($domain->client);
        // $client = Client::where('id',$domain->client_id)->firstOrFail();
        Mail::to('gottardifrancesco92@gmail.com')->send(new DomainExpiration($domain));

        // if($request->ajax()){
            return array('status'=>'ok','message'=>'Email inviata correttamente');
        // }else{
        //     return Redirect::back()->with('message', trans('contact.contact_ok'));
        // }


    }




}
