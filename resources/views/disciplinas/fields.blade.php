<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Disciplina Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disciplina', 'Disciplina:') !!}
    {!! Form::text('disciplina', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('disciplinas.index') !!}" class="btn btn-default">Cancel</a>
</div>
