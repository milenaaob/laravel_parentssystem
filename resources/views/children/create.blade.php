<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Filhos</title>
</head>

<body>
<form action="{{route('children.store')}}" method="POST">
    @csrf
    <label for="">Nome</label> <br />
    <input type="text" name="name"> <br />

    <label for=""> Pai </label> <br />

    <select id="parentsId" name="parentsId">
        @foreach($parents as $parent)
            <option
                value='{{$parent->id}}'>{{$parent->name_father}}
            </option>
        @endforeach
    </select> <br />
    <button> Salvar</button>
</form>
</body>
</html>
