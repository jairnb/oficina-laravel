{{-- <div class="modal" id="createMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Material</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body"> --}} 
        <div class="container">  
            <div class="row">
                <div class="col-md-6 m-auto">               
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" class="form-control">
                        {{-- <span class="text-danger">{{ $errors->first('name') }}</span> --}}
                    </div>
                    <div class="form-group">
                        <label for="price">Preço</label>
                        <input id="price" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stock">Quantidade</label>
                        <input type="number" id="stock" name="stock" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea id="description" name="description" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" form="materialform" data-dismiss="modal">Salvar</button>
                    </div>     
                </div>          
            </div>     
        </div>          
            {{-- </div>
        </div>
    </div>
</div> --}}




{{-- 
GET|HEAD  | material                   | material.index    | App\Http\Controllers\MaterialController@index                          | web          |
|        | POST      | material                   | material.store    | App\Http\Controllers\MaterialController@store                          | web          |
|        | GET|HEAD  | material/create            | material.create   | App\Http\Controllers\MaterialController@create                         | web          |
|        | DELETE    | material/{material}        | material.destroy  | App\Http\Controllers\MaterialController@destroy                        | web          |
|        | GET|HEAD  | material/{material}        | material.show     | App\Http\Controllers\MaterialController@show                           | web          |
|        | PUT|PATCH | material/{material}        | material.update   | App\Http\Controllers\MaterialController@update                         | web          |
|        | GET|HEAD  | material/{material}/edit   | material.edit     | App\Http\Controllers\MaterialController@edit                           | web          | --}}