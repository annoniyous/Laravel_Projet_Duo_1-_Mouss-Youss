<h1>Modification Article </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Numero</th>
        <th scope="col">Sous-titre</th>
        <th scope="col">texte</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($bArticle as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->numero}}</td>
                <td>{{{$item->subtitle}}}</td>
                <td>{{$item->texte}}</td>

                <td>
                  <form action="/deleteArticle/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>

              <td>
                  <a class="btn btn-success" href="/article-show/{{$item->id}}">show more</a>
              </td>

            </tr>
            
        @endforeach
        
    </tbody>
  </table>