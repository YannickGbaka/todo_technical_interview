@extends('partials.main')

@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div x-data class="container py-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10">
                    <div class="card">

                        <div class="card-header p-3">
                            <h5 class="mb-0"><i class="fas fa-tasks me-2 mx-2"></i>Liste tâches à accomplir</h5>
                        </div>
                        @if (Session::has('task_creation'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Tâche crée 🎉</strong> La création de la tâche a réussie
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card-body" style="position: relative; height: 400px">

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Tâche</th>
                                        <th scope="col">Priorité</th>
                                        <th scope="col">Etat</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($todos as $todo)
                                        <tr class="fw-normal">

                                            <td class="align-middle  border-0 rounded" style="background-color: #f4f6f7;">
                                                <span> <input class="form-check-input me-2" type="checkbox" value=""
                                                        aria-label="..." />{{ $todo->task }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0">
                                                    <span
                                                        class="badge badge-pill 
                                                    @switch($todo->priority) @case('Elévé')
badge-danger
@break

@case('Moyenne')
badge-warning
@break

@case('Faible')
badge-info
                                                        @break @endswitch">
                                                        {{ $todo->priority }}
                                                    </span>
                                                </h6>
                                            </td>
                                            <td class="align-middle">
                                                @if ($todo->state == true)
                                                    <i class="fas fa-check text-success me-3"></i>
                                                @else
                                                    <i class="fas fa fa-spinner text-warning me-3"></i>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                                        class="fas fa-edit text-primary me-3 mx-2"></i></a>
                                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                                        class="fas fa-trash-alt text-warning"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer text-end p-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addTodoModal">Ajouter
                                une tâche</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('partials.add_todo_modal')
@endsection


@section('footer')
    <div class="text-center">
        Build with &hearts; by Gosse Yannick Cyriaque GBAKA
    </div>
@endsection
