<!-- Idaluno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idaluno', 'Idaluno:') !!}
    {!! Form::number('idaluno', null, ['class' => 'form-control']) !!}
</div>

<!-- Iddisciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iddisciplina', 'Iddisciplina:') !!}
    {!! Form::select('iddisciplina', $disciplinas, null,['class' => 'form-control']) !!}
</div>

<!-- Nota1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota1', 'Nota1:') !!}
    {!! Form::number('nota1', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota2', 'Nota2:') !!}
    {!! Form::number('nota2', null, ['class' => 'form-control']) !!}
</div>

<!-- Nota3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nota3', 'Nota3:') !!}
    {!! Form::number('nota3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('notas.index') !!}" class="btn btn-default">Cancel</a>
</div>
