<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="House data CMS">
    <meta name="author" content="Yoran Schreuder Peters">

    <title>HouseDataCMS - @yield('title')</title>

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <!-- Datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/frontend/stylesheet.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
