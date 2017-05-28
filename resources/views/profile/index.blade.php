@extends('template')

@section('titre')
Consultation des profils
@endsection

@section('contenu')
    <br>
    <div class="col-md-9 col-sm-12" role="main">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des profils</h3>
            </div>
            {!! link_to_route('profile.create', 'Ajouter un profil', [], ['class' => 'btn btn-info pull-left', 'style'=>'margin-top:5px']) !!}

@foreach ($profile as $profiles)
                <div class="col-xs-12" style="margin: 10px;" id="{!! $profiles->id !!}">
                        <div class="col-md-2 col-xs-12 text-primary">
                            <strong>{!! $profiles->first_name!!}</strong><br><strong>{!! $profiles->last_name!!}</strong>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <p style="height:200px; overflow: auto;">{!! $profiles->description !!}</p>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    {!! link_to_route('profile.edit', 'Modifier', [$profiles->id], ['class' => 'btn btn-warning btn-block']) !!}
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['profile.destroy', $profiles->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce profil ?\')']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <div class="row col-md-12">
                                {!! Html::image($profiles->image, $profiles->first_name, array("class" => 'img-responsive', "style"=>"max-height:200px; max-width: 100%")) !!}
                            </div>
                        </div>
                </div>
@endforeach

        </div>


    </div>
    <div class="col-md-offset-9 col-md-3 hidden-sm hidden-xs affix" role="complementary" style="position: fixed">
        <nav>
            <ul class="nav">
                @foreach ($profile as $profile)
                    <li> <a href="#{{ $profile->id }}">{{ $profile->first_name }}</a>
                    </li>

                @endforeach
            </ul>
        </nav>
    </div>
@endsection
