<table class="table table-responsive" id="alunos-table">
    <thead>
        <tr>
            <th>Matricula</th>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Bairro</th>
        <th>Cep</th>
        <th>Cidade</th>
        <th>Uf</th>
        <th>Email</th>
        <th>Dtentrada</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)
        <tr>
            <td>{!! $aluno->matricula !!}</td>
            <td>{!! $aluno->nome !!}</td>
            <td>{!! $aluno->endereco !!}</td>
            <td>{!! $aluno->bairro !!}</td>
            <td>{!! $aluno->cep !!}</td>
            <td>{!! $aluno->cidade !!}</td>
            <td>{!! $aluno->uf !!}</td>
            <td>{!! $aluno->email !!}</td>
            <td>{!! $aluno->dtentrada !!}</td>
            <td>
                {!! Form::open(['route' => ['alunos.destroy', $aluno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('alunos.show', [$aluno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('alunos.edit', [$aluno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>