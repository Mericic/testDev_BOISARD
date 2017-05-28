@extends('template')

@section('titre')
Modification
@endsection

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un profile</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'method'=>'put', 'class' => 'form-horizontal panel', 'files' => true]) !!}
                    <div class="form-group {!! $errors->has('first_name') ? 'has-error' : '' !!}">
                        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Prénom']) !!}
                        {!! $errors->first('first_name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('last_name') ? 'has-error' : '' !!}">
                        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('last_name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'description']) !!}
                        {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                    </div>

                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>

    </div>
@endsection