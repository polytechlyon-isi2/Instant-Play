<?php
/**
 * Created by PhpStorm.
 * User: GregoirePiat
 * Date: 15/03/16
 * Time: 17:08
 */
?>

@extends('layouts.app')
@section('content')
    {!! Form::open(['url' => 'contact']) !!}


    {!! Form::label('nom', 'Nom : ') !!}

    {!! Form::text('nom') !!}

    {!! Form::label('prenom', 'Prénom : ') !!}

    {!! Form::text('prenom') !!}

    {!! Form::label('adresseMail', 'Mail : ') !!}

    {!! Form::text('adresseMail') !!}

    {!! Form::label('numTelephone', 'Téléphone : ') !!}

    {!! Form::text('numTelephone') !!}

    {!! Form::label('adresse', 'Adresse : ') !!}

    {!! Form::text('adresse') !!}

    {!! Form::label('dateNaissance', 'Date de naissance : ') !!}

    {!! Form::text('dateNaissance') !!}


    {!! Form::submit('Envoyer !') !!}

    {!! Form::close() !!}
@endsection