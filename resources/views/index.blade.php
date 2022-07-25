@extends('partials.main')

@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10">

                    <div class="card">
                        <div class="card-header p-3">
                            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
                        </div>
                        <div class="card-body" style="position: relative; height: 400px">

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Task</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($todos as $todo)
                                        <tr class="fw-normal">
                                            <td class="align-middle">
                                                <span>{{ $todo->task }}</span>
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
badge-warning
                                                        @break @endswitch">
                                                        {{ $todo->priority }}
                                                    </span>
                                                </h6>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                                                        class="fas fa-check text-success me-3"></i></a>
                                                <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer text-end p-3">
                            <button class="btn btn-primary">Add Task</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer')
    <div class="text-center">
        Build with &hearts; by Gosse Yannick Cyriaque GBAKA
    </div>
@endsection
