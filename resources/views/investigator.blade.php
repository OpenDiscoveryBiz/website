@extends('layouts.default')

@section('title', 'Business Investigator')

@section('content')
    <h1>Business Investigator</h1>

    <a href="/imgs/BusinessInvestigator2.png"><img src="/imgs/BusinessInvestigator2.png" style="max-width: 40%; float: right; margin: 0 0 1em 1em;"></a>

    <p>Business Investigator is a browser extension that enables a web site to document the authenticity of its claimed owner. This is done by resolving the BusinessID retrieved from a <a href="https://tools.ietf.org/html/rfc7230#section-3.2" target="_blank">HTTP header field</a>, a <a href="https://tools.ietf.org/html/rfc5785" target="_blank">.well-known address</a>, a <a href="https://tools.ietf.org/html/rfc6763" target="_blank">DNS record</a>, or an <a href="https://www.ietf.org/rfc/rfc5280.txt" target="_blank">SSL certificate</a> and comparing the list of URL's officially claimed by the company with the specific URL of the website or a specific webpage.</p>

    <p>The Business Investigator displays an icon next to the address bar. When clicking the icon a popup appears with selected relevant information about the website owner. This includes parts of the public records of the business entity as well as relevant selfasserted and third party attested claims.</p>

    <p>Business Investigator is available in Google's <a href="https://chrome.google.com/webstore/detail/business-investigator/kdnkelhohlogiebdcmicchkadjmkhdgm" target="_blank">Chrome webstore</a> and works with most Chrome based browsers.</p>

    <p style="margin-top: 3em"><b>PRIVACY POLICY</b></p>

    <p>The purpose of the Business Investigator extension and the associated Resolver is exclusively to provide the user with authoritative and trustworthy information about the Business entity running the website - or the specific page of a website - that the user is visiting.</p>

    <p>In order to verify the binding between the website/webpage and the business entity, the extension needs to get the domain or page URL to look for a specific tag/header/file containing the asserted internationalized Business Registry ID.</p>

    <p>The Business ID is sent to the Resolver in order to retrieve information from the Business Registry and optionally more trustworthy sources, and then locally compare if the business is asociated with the website.</p>

    <p>Business entity data may be cached by the resolver for up to 24 hours to avoid excessive load on the data sources. They will NOT be used to compile any kind of web usage history for any specific users.</p>

@stop
