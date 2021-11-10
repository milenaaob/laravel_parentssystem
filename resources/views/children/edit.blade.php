<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Filhos</title>
</head>

<body>

{{ Form::model($children, array('route' => array('children.update', $children -> id), 'method' => 'PUT')) }}

{{ Form::label('name', 'Nome') }}
{{ Form::text('name', null, array('class' => 'form-control')) }}

{{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
{{ Form::open(array('url' => 'children/' . $children->id, 'class' => 'pull-right')) }}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::submit('Excluir', array('class' => 'btn btn-warning')) }}

{{ Form::close() }}

</body>
</html>
