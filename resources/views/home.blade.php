@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <h1 class= "pb-2">Seja bem vindo ao site de estudos da Bíblia</h1>

    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Aqui você encontra</h2>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 ">
            <div class = "feature col">
                <a class= "home-links" href="/testamentos">
                    <div class="card" style="width: 18rem;">
                        <div
                            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-secundary bg-gradient fs-2 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bank" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Testamentos</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Testamentos da Biblia</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class = "feature col">
                <a class= "home-links" href="/livros">
                    <div class="card" style="width: 18rem;">
                        <div
                            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-secundary bg-gradient fs-2 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-book" viewBox="0 0 16 16">
                                <path
                                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Livros</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Todos dos livros da Biblia</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class = "feature col">
                <a class= "home-links" href="/versiculos">
                    <div class="card" style="width: 18rem;">
                        <div
                            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-secundary bg-gradient fs-2 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-card-text" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                <path
                                    d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Versiculos</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Versiculos da Biblia</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
