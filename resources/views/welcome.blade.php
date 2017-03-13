@extends('layouts.default')

@section('title', 'Welcome')

@section('content')
<h1>OpenDiscovery</h1>

<p>The OpenDiscovery project is an open source implementation of various building blocks to enable <a href="https://www.bedreid.dk/distributed_business_service_discovery" target="_blank">Distributed Business Service Discovery</a>.

<p>The purpose of OpenDiscovery is to facilitate the creation of a new - initially local but potentially global - ecosystem for exchange of products and services.</p>

<p>This will be accomplished by providing tools enabling vendors to exhibit their services in a way that allows potential consumers to discover them without the need for a common intermediary.</p>

<p>The central OpenDiscovery components are the <a href="/resolver">Resolver</a> and the <a href="/publisher">Business Publisher</a>, while the first "visible" end user component is the <a href="/investigator">Business Investigator</a> browser extension. Repositories for all components are available on <a href="https://github.com/OpenDiscoveryBiz" target="_blank">Github</a> and are open for collaboration with respect to business issues as well as technical issues.</p>

<p>Key prerequisites for Distributed Service Discovery are:</p>
<ul>
    <li>an authoritative association between registered business entities and their online services.</li>
    <li>semantic structures that allow vendors to describe their services in standardized ways.</li>
    <li>discovery methods enabling consumers to find and aggregate relevant vendor data.</li>
</ul>

<p>The benefits of Distributed Service Discovery include:</p>
<ul>
    <li><b>Once-only Principle:</b> A business only needs to publish information about its services at one place.</li>
    <li><b>Big Data Analysis:</b> It becomes much easier for third parties to gather reliable data about business entities.</li>
    <li><b>Identity Validation:</b> Provides an easier, cheaper, and more flexible alternative to EV-Certificates.</li>
    <li><b>Privacy & Consent:</b> Consent can be managed in the aggregation and prioritization tools, so consumers will only be forwarded to business entities that comply with their own privacy policies.</li>
    <li><b>Significant savings:</b> Today, discovery costs (e.g. to GAFA's) typically amounts to 15-30 percent of the traded value. As Distributed Discovery ensures normal competition for vendor as well as consumer tools, this amount can be expected to drop significantly.</li>
    <li><b>Platform indepence:</b> No more need for vendors to register with several intermediaries to expose themselves to every consumer - or for consumers to register with more platforms to avoid the risk of missing attractive offers.</li>
</ul>

<p>The OpenDiscovery project is supported by<br />
    <a href="https://www.peercraft.com" target="_blank">Peercraft ApS</a>
</p>
@stop
