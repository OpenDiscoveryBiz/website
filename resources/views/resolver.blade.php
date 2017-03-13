@extends('layouts.default')

@section('title', 'Resolver')

@section('content')
    <h1>Resolver</h1>

    <p>The Resolver is the central component of the OpenDiscovery project. Its task is to aquire information about a legal business entity based on the international version of its corporate ID. For businesses in the European Union this implies the EUID as defined in EU Regulation 2015/884 of 8 June 2015.</p>

    <p>The resolver distiguishes between two classes of information about a business:<br>
        <b>Official: </b>Information retrieved from the business register<br>
        <b>Voluntary: </b> Self-asserted and/or third party certified information exhibited by the business itself, e.g. using the OpenDiscovery <a href="/publisher">Business Publisher</a>.
    </p>

    <p>Technically the resolver works by:</p>
    <ul>
        <li>Looking up the ID on the root provider, but is redirected to the country specific provider (<a href="https://root.opendiscovery.biz/.well-known/opendiscovery/DK33755341.json?pretty=1" target="_blank">See example</a>).</li>
        <li>Then looking up the ID on the country specific provider. Here it's returned with the official attributes, and an address for the voluntary provider used by the business (<a href="https://dk.opendiscovery.biz/.well-known/opendiscovery/DK33755341.json?pretty=1" target="_blank">See example</a>).</li>
        <li>Then looking up the ID on the voluntary provider. Here it's returned with the voluntary attributes offered by the business (<a href="https://www.peercraft.com/.well-known/opendiscovery/DK33755341.json?pretty=1" target="_blank">See example</a>).</li>
        <li>Finally the resolver merges all the recevied data into one reply to the client (<a href="https://resolver.opendiscovery.biz/lookup?id=DK33755341&pretty=1" target="_blank">See example</a>).</li>
    </ul>

    <a name="result"></a>

    <h2>Test</h2>
    <p>Try it for yourself! Currently only Danish businesses are supported. Further contries coming later.</p>

    <form method="POST" action="/resolver#result" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="businessId">ID</label>
            <input type="text" name="id" class="form-control" id="businessId" placeholder="DK33755341" value="{{$id}}">
        </div>
        <button type="submit" class="btn btn-success">Lookup</button>
    </form>

    @if ($result_reply)
        <h2>Result</h2>
        <pre class="bg-info">{{$result_reply}}</pre>
    @endif
@stop
