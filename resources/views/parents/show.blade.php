<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pais</title>
</head>

<body>
        <label for="">Nome Pai</label> <br />
        <input type="text" name="name_father" value="{{$parents->name_father}}" readonly="readonly"> <br />
        <label for=""> Nome Mãe</label> <br />
        <input type="text" name="name_mother" value="{{$parents->name_mother}}" readonly="readonly"> <br />
        <p><a href="{{ route('parents.edit', $parents->id) }}">Editar</a></p>
        <p><a href="{{ route('parents.destroy', $parents->id) }}">Excluir</a></p>

        <table class="table" style="border: 1px solid black">
            <thead>
            <tr>
                <th style="border-collapse: collapse">Nome</th>
            </tr>
            </thead>
            <tbody>
            @foreach($children as $child)
                <tr>
                    <th scope="row" style="border-collapse: collapse">{{$child->name}}</th>
                    <th scope="row" style="border-collapse: collapse"><a href="{{ route('children.edit', $child->id) }}">Editar</a></th>
                    <th scope="row" style="border-collapse: collapse"><a href="{{ route('children.destroy', $child->id) }}">Excluir</a></th>

                    @endforeach
                </tr>
            </tbody>
        </table>

</body>
</html>

