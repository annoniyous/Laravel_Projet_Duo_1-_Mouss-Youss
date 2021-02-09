

<h1>Modification Home liste a puces 2 </h1>

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

        @foreach ($homeListe2 as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->texte}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
            </tr>
        @endforeach
        
    </tbody>
  </table>