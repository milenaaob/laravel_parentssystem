<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pais</title>
</head>

<body>
    <form action="{{route('parents.store')}}" method="POST">
        @csrf
        <label for="">Nome Pai</label> <br />
        <input type="text" name="name_father"> <br />

        <label for=""> Nome Mãe</label> <br />
        <input type="text" name="name_mother"> <br />

        <button> Salvar</button>
    </form>

        <table class="table" style="">
            <thead>
            <tr>
                <th>Nome</th>
                <th> Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($parents as $parents)
                <tr>
                    <th scope="row">{{$parents->name_father}}</th>
                    <th scope="row">{{$parents->name_mother}}</th>
                    <th scope="row"><a href="{{ route('parents.edit', $parents->id) }}">Editar</a></th>

                    @endforeach
                </tr>
            </tbody>
        </table>

</body>
</html>
