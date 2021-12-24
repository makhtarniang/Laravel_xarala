
<div class="card mb-3">
    
    <style>
        img {
    height: 330px;
    vertical-align: middle;
    border-style: none;
}
.table .thead-light th {
    color : #fff !important;
    background: #00c9b7 !important;
    border: none !important;
    border:base64_decode;
 
}

    </style>
  <!--  <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">-->
    <div class="card-body">
       
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">NomComplet</th>
                <th scope="col">Status</th>
                <th scope="col">Location</th>
                <th scope="col">Telephone</th>
                 <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($utilisateurs as $utilisateur)
                <tr>
                    <td>{{ $utilisateur->NomComplet }}</td>
                    <td>{{ $utilisateur->Status }}</td>
                    <td>{{ $utilisateur->Location }}</td>
                    <td>{{ $utilisateur->Telephon }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$utilisateur->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      @csrf
                      @method('DELETE')
                      <a href="{{ url('/delet/'.$utilisateur->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                     

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






