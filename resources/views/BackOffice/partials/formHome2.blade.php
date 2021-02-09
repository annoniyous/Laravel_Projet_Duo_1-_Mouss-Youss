
<div class="container">
<form action="/ajouter2" method="POST">
    <div class="form-group">
        @csrf
      <label name="texte" >Nouvelle puce: </label>
      <input type="text" class="form-control" placeholder="..." name="texte">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>