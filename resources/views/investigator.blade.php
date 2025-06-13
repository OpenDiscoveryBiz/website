@extends('layouts.default')

@section('title', 'Business Investigator')

@section('content')
    <h1>Business Investigator</h1>

    <a href="/imgs/BusinessInvestigator2.png"><img src="/imgs/BusinessInvestigator2.png" style="max-width: 40%; float: right; margin: 0 0 1em 1em;"></a>

    <p>Business Investigator is a browser extension that enables a web site to document the authenticity of its claimed owner. This is done by resolving the BusinessID retrieved from a <a href="https://tools.ietf.org/html/rfc7230#section-3.2" target="_blank">HTTP header field</a>, a <a href="https://tools.ietf.org/html/rfc5785" target="_blank">.well-known address</a>, a <a href="https://tools.ietf.org/html/rfc6763" target="_blank">DNS record</a>, or an <a href="https://www.ietf.org/rfc/rfc5280.txt" target="_blank">SSL certificate</a> and comparing the list of URL's officially claimed by the company with the specific URL of the website or a specific webpage.</p>

    <p>The Business Investigator displays an icon next to the address bar. When clicking the icon a popup appears with selected relevant information about the website owner. This includes parts of the public records of the business entity as well as relevant selfasserted and third party attested claims.</p>

    <p>Business Investigator is available in Google's <a href="https://chrome.google.com/webstore/detail/business-investigator/kdnkelhohlogiebdcmicchkadjmkhdgm" target="_blank">Chrome webstore</a> and works with most Chrome based browsers.</p>

    <h2>DATA FLOW</h2>

    <p>(NOTE: Exclusively Business / Website Owner data - no user data involved)</p>

    <p>The purpose of the Business Investigator extension and the associated Resolver is to provide the user with authoritative and trustworthy information about the Business entity in charge of a visited website - all without revealing any information about the user to the website owner or any other party.</p>

    <p>To do this the extension needs to get the domain or page URL to look for a specific tag/header/file containing the asserted internationalized Business Registry ID.</p>

    <p>The Business ID claimed by the website owner - but no user data - is sent to the external Resolver in order to retrieve information from the Business Registry and optionally more trustworthy sources. The final process of verifying the binding between website and business entity is done locally by the extension.</p>

    <p>Business entity data may be cached by the Resolver for up to 24 hours to avoid excessive load on the data sources. But as they are not referenced to any user data, they cannot be used to compile any kind of web usage history for any specific users. Website / Business data is cached in the browser's memory only <a href="https://developer.chrome.com/docs/extensions/reference/api/storage#storage_areas" target="_blank">session storage</a>.</p>

    <h2>PRIVACY POLICY</h2>

    <p><b>User Data Collection</b><br />The extension does not collect any user data.</p>

    <p><b>User Data Handling</b><br />The extension does not process any user data.</p>

    <p><b>User Data Sharing</b><br />The extension does not share any user data with the developer or with third parties</p>

    <p><b>User Data Storage</b><br />The extension does not store any user data.</p>

@stop
