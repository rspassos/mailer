<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Test</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class="container overflow-hidden">
            <div class="row justify-content-md-center">
                <form class="col-md-6" method="post" action="{{route('send')}}">
                    @csrf
                    <h1>Formulário de teste</h1>
                    <div class="form-group col-6 mb-3">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group mb-3">
                        <label for="mensagem">Mensagem</label>
                        <input name="mensagem" type="text" class="form-control" id="mensagem" placeholder="Mensagem">
                    </div>
                    <button type="submit" class="btn btn-primary gy-5">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
