<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Users Table UI</title>
</head>
<body>


<div class="row header-container justify-content-center">
    <style>
        .header-container {
    margin-right: 0px !important;
    margin-left: 0px !important;
}
.header-container > h2 {

}
    </style>
    <div class="header">
    <style>
    .header {
    border-bottom: 2px solid #00c9b7;
    margin-top: 20px !important;
    margin-bottom: 20px !important;
    font-family: 'Dancing Script', cursive;
    font-size: 20px !important;
    }
   
    </style>

    <style>
        .h1{
            max-width: 140px;
        }
    </style>
        <h1>Users Table UI</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("Utilisateurlist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("Utilisateurlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                   <!-- <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">-->
                    
                    <style>
                        input[type=text] {

                        background : #eee ;
                        border: none !important;
                        box-shadow: 0px 1px 1px #ddd !important;
                        autocomplete: off;
                        }
                        input[type=text]:focus{
                        background : #eee ;
                        border: none !important;
                        box-shadow: 0px 4px 5px #ccc !important;
                        }
                        img {
                        height: 330px;
                        vertical-align: middle;
                        border-style: none;
                    }
                    </style>
                    <div class="card-body">
                        <h5 class="card-title">Entrez les informations du nouvel Utilisateur</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NomComplet</label>
                                <input name="NomComplet" type="text" class="form-control"  placeholder="Enter nomComplet">
                            </div>
                            <div class="form-group">
                                <label> Status</label>
                                <input name="Status" type="text" class="form-control"  placeholder="Enter vote">
                            </div>  
                            <div class="form-group">
                                <label>Location</label>
                                <input name="Location" type="text" class="form-control"  placeholder="Enter voter Location">
                            </div>
                            
                            <div class="form-group">
                                <label>Telephone</label>
                                <input name="Telephone" type="text" class="form-control"  placeholder="Enter voter num Telephone">
                            </div>
                           
                            <input type="submit" class="btn btn-info" value="Enregistre">
                            <input type="reset" class="btn btn-warning" value="Fermer">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("Utilisateurlist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("Utilisateurlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                   <!-- <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">-->
                    <div class="card-body">
                        <h5 class="card-title">Mettre à jour les informations de utilisateur</h5>
                        <form action="{{ url('/utilisateur/'.$utilisateur->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>NomComplet</label>
                                <input name="NomComplet" type="text" class="form-control"  placeholder="Enter nomComplet">
                            </div>
                            <div class="form-group">
                                <label> Status</label>
                                <input name="Status" type="text" class="form-control"  placeholder="Enter vote">
                            </div>

                            
                            <div class="form-group">
                                <label>Location</label>
                                <input name="Location" type="text" class="form-control"  placeholder="Enter voter Location">
                            </div>
                            
                            <div class="form-group">
                                <label>Telephone</label>
                                <input name="Telephone" type="text" class="form-control"  placeholder="Enter voter num Telephone">
                            </div>
                            <input type="submit" class="btn btn-info" value="Modifier">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>