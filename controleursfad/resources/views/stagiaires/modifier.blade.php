<form action="/Stagiaires/{{$stg}}" method="post">
    @method("put")
    @csrf
    <input type="text" name="nom" value="{{$stg}}"/>
    <input type="submit" value="modifier">
</form>