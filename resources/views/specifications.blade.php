@extends('layouts.default')

@section('title', 'Specifications')

@section('content')
    <h1>Specifications</h1>

    <p>OpenDiscovery relies on the mutual reference between the public record of a legal entity in its authoritative business register and a URL providing self-asserted or third party validated information about the entity and its services.</p>

    <p>So far the national business registers of Denmark, Norway, Finland, Belgium, The Netherlands, Bulgaria, Greece, and New Zealand have enabled legal entities to reference a URL in their public records.</p>

    <p>The default OpenDiscovery method for an entity to refer back to its official records and to voluntarily provide further reference to its services is using .well-known [RFC5785] with the requested IANA URI suffix "opendiscovery" to locate the files:</p>

    <p><b>host.json</b> referencing the internationalized BusinessID<br />
        (example: <a href="https://www.peercraft.com/.well-known/opendiscovery/host.json">https://www.peercraft.com/.well-known/opendiscovery/host.json</a>)</p>

    <p><b>[BusinessID].json</b> containing (reference to) self-asserted and/or third party validated information about the entity<br />
        (example: <a href="https://www.peercraft.com/.well-known/opendiscovery/DK33755341.json">https://www.peercraft.com/.well-known/opendiscovery/DK33755341.json</a>)</p>

    <p>Websites with pages representing different legal entities, may insert the HTTP header-field <b>X-OpenDiscovery-ID</b> with the respective BusinessID's as field value to override the BusinessID provided in host.json for these pages.</p>

    <p>The purpose of OpenDiscovery is to facilitate the creation of a new data driven ecosystem for exchange of products and services.</p>

    <p>An important foundation for this is the use of standardized schemas and taxonomies for the description of businesses and their services. Fortunately most of these are readily available. Examples of standards, schemas, and data sources that will be used to the extent possible are listed in <a href="https://github.com/OpenDiscoveryBiz/publisher/wiki/Standards,-Schemas,-and-Data" target="_blank">the wiki for the Publisher component</a>.</p>

    <p>As the work progresses, this page will be extended to become a specification overview and placeholder for relevant links to individual more specific parts of the OpenDiscovery specifications.</p>
@stop
