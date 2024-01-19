<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('translation.app_title')</title>
    @include('layouts.header')
</head>

<body class="layout-light side-menu">
    <div class="mobile-search">
        <form action="/" class="search-form">
            <img src="img/svg/search.svg" alt="search" class="svg">
            <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                aria-label="Search">
        </form>
    </div>
    <div class="mobile-author-actions"></div>
    <header class="header-top">
        @include('layouts.nav')
    </header>
    <main class="main-content">
        @include('layouts.sidebar')

        <div class="contents">
            <div class="container-fluid">
                <div class="note-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Note</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="uil uil-estate"></i>Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Note</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="note-contents">
                                <div class="note-sidebar-wrapper mb-30">
                                    <div class="note-sidebar">
                                        <div class="card border-0 shadow-none">
                                            <div class="card-body px-15 pt-30">
                                                <div class="px-3">
                                                    <a href="#"
                                                        class="btn btn-primary btn-default btn-rounded btn-block"
                                                        data-bs-toggle="modal" data-bs-target="#noteModal"> <i
                                                            class="las la-plus fs-16"></i>
                                                        Add Note</a>
                                                </div>
                                                <div class="note-types">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#" class="active"><img class="svg"
                                                                    src="img/svg/edit.svg" alt="edit"> All</a></li>
                                                        <li><a href="#"><img src="img/svg/star.svg" alt="star"
                                                                    class="svg"> Favorite</a></li>
                                                    </ul>
                                                </div>
                                                <div class="note-labels">
                                                    <p><img src="img/svg/tag.svg" alt="tag" class="svg"> Labels
                                                    </p>
                                                    <ul class="list-unstyled">
                                                        <li><a class="label-personal" href><span></span> Personal</a>
                                                        </li>
                                                        <li><a class="label-work" href><span></span> Work</a></li>
                                                        <li><a class="label-social" href><span></span> Social</a></li>
                                                        <li><a class="label-important" href><span></span> Important</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="note-grid-wrapper mb-30">
                                    <div class="notes-wrapper">
                                        <div class="note-grid">
                                            @foreach ($notes as $note)
                                                <div class="note-single">
                                                    <div class="note-card note-{{ strtolower($note->label) }}">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h4 class="note-title">{{ $note->title }} <span
                                                                        class="note-status"></span></h4>
                                                                <p class="note-excerpt">{{ $note->description }}</p>
                                                                <div class="note-action">
                                                                    <div class="note-action__left">
                                                                        <a href="#" class><img
                                                                                src="img/svg/star.svg" alt="star"
                                                                                class="svg"></a>
                                                                        <a href="{{ url('admin/notes') }}/{{ $note->id }}"><img class="svg"
                                                                                src="img/svg/trash-2.svg" alt></a>
                                                                    </div>
                                                                    <div class="note-action__right">
                                                                        <div
                                                                            class="label-dropdown dropdown dropdown-hover">
                                                                            <a class="btn-link" href="#"><img
                                                                                    class="svg"
                                                                                    src="img/svg/more-vertical.svg"
                                                                                    alt="more-vertical"></a>
                                                                            <div class="dropdown-default">
                                                                                <a class="nl-personal dropdown-item"
                                                                                    href="#">Personal</a>
                                                                                <a class="nl-work dropdown-item"
                                                                                    href="#">Work</a>
                                                                                <a class="nl-social dropdown-item"
                                                                                    href="#">Socail</a>
                                                                                <a class="nl-important dropdown-item"
                                                                                    href="#">Important</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.notes.add_notes')

            </div>
        </div>
    </main>

    @include('layouts.footer')

</body>



</html>
