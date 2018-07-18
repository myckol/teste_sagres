<table class="table table-responsive" id="disciplinas-table">
    <thead>
        <tr>
            <th>Codigo</th>
        <th>Disciplina</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($disciplinas as $disciplina)
        <tr>
            <td>{!! $disciplina->codigo !!}</td>
            <td>{!! $disciplina->disciplina !!}</td>
            <td>
                {!! Form::open(['route' => ['disciplinas.destroy', $disciplina->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('disciplinas.show', [$disciplina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('disciplinas.edit', [$disciplina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>