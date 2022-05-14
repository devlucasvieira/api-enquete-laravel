    <div class="row">
        <div class="form-group col-sm-6">
        <form method="POST" action="{{ route('respondente.store') }}">
        {{ csrf_field() }}
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required autofocus>
            <small class="form-text text-muted" id="nome">Informe seu nome</i></small>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email" required>
        </div>
    </div>