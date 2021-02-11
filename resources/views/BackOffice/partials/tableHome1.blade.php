

<h1>Modification Home liste a puces 1 </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">texte</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($homeListe1 as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->texte}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>

                <td>
                  <form action="/delete1/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>

              <td>
                  <a class="btn btn-success" href="/liste-show/{{$item->id}}">show more</a>
              </td>

            </tr>
            
        @endforeach
        
    </tbody>
  </table>