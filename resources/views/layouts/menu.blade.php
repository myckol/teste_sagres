<li class="{{ Request::is('alunos*') ? 'active' : '' }}">
    <a href="{!! route('alunos.index') !!}"><i class="fa fa-edit"></i><span>Alunos</span></a>
</li>

<li class="{{ Request::is('disciplinas*') ? 'active' : '' }}">
    <a href="{!! route('disciplinas.index') !!}"><i class="fa fa-edit"></i><span>Disciplinas</span></a>
</li>

<li class="{{ Request::is('notas*') ? 'active' : '' }}">
    <a href="{!! route('notas.index') !!}"><i class="fa fa-edit"></i><span>Notas</span></a>
</li>

