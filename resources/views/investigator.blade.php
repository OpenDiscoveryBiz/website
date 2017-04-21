@extends('layouts.default')

@section('title', 'Business Investigator')

@section('content')
    <h1>Business Investigator</h1>

    <a href="/imgs/BusinessInvestigator.png"><img src="/imgs/BusinessInvestigator.png" style="max-width: 40%; float: right; margin: 0 0 1em 1em;"></a>

    <p>Business Investigator is a browser extension that enables a web site to document the authenticity of its claimed owner. This is done by resolving the BusinessID retrieved from a <a href="https://tools.ietf.org/html/rfc7230#section-3.2" target="_blank">HTTP header field</a>, a <a href="https://tools.ietf.org/html/rfc5785" target="_blank">.well-known address</a>, a <a href="https://tools.ietf.org/html/rfc6763" target="_blank">DNS record</a>, or an <a href="https://www.ietf.org/rfc/rfc5280.txt" target="_blank">SSL certificate</a> and comparing the list of URL's officially claimed by the company with the specific URL of the website or a specific webpage.</p>

    <p>The Business Investigator displays an icon next to the address bar. When clicking the icon a popup appears with selected relevant information about the website owner. This includes parts of the public records of the business entity as well as relevant selfasserted and third party attested claims.</p>

    <p>The current prerelease version is only available for the Google Chrome browser. Future versions will also be available for the Mozilla Firefox and Microsoft Edge browsers.</p>

    <p><a href="https://chrome.google.com/webstore/detail/business-investigator/kdnkelhohlogiebdcmicchkadjmkhdgm" target="_blank">Get the prerelease version in the Chrome webstore!</a></p>
@stop
