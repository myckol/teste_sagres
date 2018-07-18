<table class="table table-responsive" id="notas-table">
    <thead>
        <tr>
            <th>Idaluno</th>
        <th>Iddisciplina</th>
        <th>Nota1</th>
        <th>Nota2</th>
        <th>Nota3</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($notas as $nota)
        <tr>
            <td>{!! $nota->idaluno !!}</td>
            <td>{!! $nota->iddisciplina !!}</td>
            <td>{!! $nota->nota1 !!}</td>
            <td>{!! $nota->nota2 !!}</td>
            <td>{!! $nota->nota3 !!}</td>
            <td>
                {!! Form::open(['route' => ['notas.destroy', $nota->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('notas.show', [$nota->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('notas.edit', [$nota->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>