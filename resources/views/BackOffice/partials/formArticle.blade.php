<div class="container">
    <form action="/ajouterArticle" method="POST">
        <div class="form-group">
            @csrf
        <div>
          <label name="titre" >Titre </label>
          <input name="titre" type="text" class="form-control" placeholder="..." >
        </div>
        <div>
          <label name="numero" >Numero</label>
          <input name="numero" type="text" class="form-control" placeholder="..." >
        </div>
        <div>
          <label name="subtitle" >Sous-Titre </label>
          <input  name="subtitle" type="text" class="form-control" placeholder="..." >
        </div>
        <div>
          <label name="texte" >Texte</label>
          <input  name="texte" type="text" class="form-control" placeholder="..." >
        </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>

</div>
