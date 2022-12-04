<form action="{{Route("Stagiaires.destroy",$id)}}" method="post">
    @method("delete")
    @csrf
    <input type="text" name="nom" value="{{$id}}"/>
    <input type="submit" value="supprimer">
</form>