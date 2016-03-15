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

    {{ Form::open(array('url' => 'foo/bar')) }}
    <?php
    echo Form::label('email', 'E-Mail Address: ');
    echo Form::text('email', 'Your email address');
    echo Form::label('subject', 'Subject: ');
    echo Form::text('subject', 'Subject');
    echo Form::label('message', 'Message: ');
    echo Form::text('message', 'Your message: ');
    ?>
    {{ Form::close() }}
@endsection

