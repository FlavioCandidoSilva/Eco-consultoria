@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card-header row">
            <h1 class="mt-4">Tarefas</h1>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active ">{{ Breadcrumbs::render('/') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Visualização de Tarefas
                <a class="btn btn-primary float-end" href=" {{ route('task.create') }}"><i class="fa-solid fa-plus"></i> Nova
                    tarefa
                </a>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tarefa</th>
                            <th>Prioridade</th>
                            <th>Data de criação</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody>
                            @foreach ($task as $tasks)
                                <tr>
                                    <td>{{ $tasks->id }}</td>
                                    <td>{{ $tasks->task_name ?? '-' }}</td>
                                    <td> {{ $tasks->priority ?? '-' }} </td>
                                    <td> {{ \Carbon\Carbon::parse($tasks->created_at)->format('d/m/Y') }}</td>
                                    <td><a class="btn btn-secondary" type="button"
                                            href="{{ route('task.edit', $tasks->id) }}"><i
                                                class="fa-regular fa-pen-to-square"></i> Editar</a></td>
                                    <td><a class="btn btn-danger" type="button" id="{{ route('task.delete', $tasks->id) }}"
                                            value="Excluir" data-bs-toggle="modal" data-bs-target="#modal-delete"><i
                                                class="fa-solid fa-trash"></i> Excluir</a>
                                </tr>
                                @include('modal.alertaDeletar')
                            @endforeach
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#modal-delete').on('show.bs.modal', function(event) {
            let value = event.relatedTarget.getAttribute('id');
            $('#form-modal-delete').attr('action', value);
        })

        
    </script>
@endsection
