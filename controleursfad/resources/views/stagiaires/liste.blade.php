<ul>
    @foreach ($stgrs as $item)
        <li>{{$item}}  <a href="{{Route("stagiaires.supprimer",$loop->index)}}">Supprimer</a>  </li>
    @endforeach
    </ul>