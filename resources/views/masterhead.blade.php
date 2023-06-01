<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>{{ isset($title) ? $title . ' -' : '' }} AppFit</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon-intelnet.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<div class="position-fixed p-2 bg-light w-100  mb-5 text-primary h3 d-flex justify-content-between align-items-center cabecalho">
    <span>
        <i class="bi bi-app-indicator"></i> AppFit
    </span>
    <img src="{{ asset(
        isset($image) ? $image  : 'assets/status.svg') }}" width="200" height="100" alt="">
</div>

<body class="antialiased bg-light">
    <div class="container mt-5">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column mt-5">
            <!-- Main Content -->
            <div id="content mt-5">
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">

                    <div class="d-none d-md-block">PC</div>
