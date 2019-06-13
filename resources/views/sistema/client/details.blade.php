<div class="modal fade text-dark" id="detailClient">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes Cliente</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">               
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input readonly type="text" class="form-control" value="{{ old('clients', $client->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input readonly type="text" class="form-control" value="{{ old('clients', $client->email) }}">
                    </div>
                    <div class="form-group">
                        <label>NIF</label>
                        <input readonly type="text" class="form-control" value="{{ old('clients', $client->nif) }}">
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input readonly type="text" class="form-control" value="{{ old('clients', $client->phone) }}">
                    </div>                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>