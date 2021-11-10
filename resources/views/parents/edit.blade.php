<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pais</title>
</head>

<body>

{{ Form::model($parents, array('route' => array('parents.update', $parents->id), 'method' => 'PUT')) }}

{{ Form::label('name_father', 'Nome Pai') }}
{{ Form::text('name_father', null, array('class' => 'form-control')) }}

{{ Form::label('name_mother', 'Nome Mãe') }}
{{ Form::text('name_mother', null, array('class' => 'form-control')) }}

{{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

{{ Form::open(array('url' => 'parents/' . $parents->id, 'class' => 'pull-right')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Excluir', array('class' => 'btn btn-warning')) }}
{{ Form::close() }}
<br />

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


            @endforeach
        </tr>
    </tbody>
</table>

</body>
</html>
