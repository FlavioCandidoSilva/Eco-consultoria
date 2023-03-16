@extends('layout.layout')
@section('content')
    <form action="{{ route('task.update', $task->id) }}" method="POST">
        @csrf
        <div class="card-header mt-4">
            <h2>Editar tarefa</h2>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="col-12">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInput">Título <b style="color: red">*</b></label>
                            <input name="task_name" class="form-control" value="{{ $task->task_name }}" maxlength="45"
                                placeholder="Digite um título" required>
                        </div>
                        <div class="form-group col-4">
                            <label for="priority">Selecione uma prioridade para tarefa </label>
                            <select class="form-control select" id="priority" name="priority">
                                <option value=" ">Selecione uma prioridade</option>
                                <option value="Alta" @if ($task->priority == 'Alta') selected @endif>Alta</option>
                                <option value="Media" @if ($task->priority == 'Media') selected @endif>Média</option>
                                <option value="Baixa" @if ($task->priority == 'Baixa') selected @endif>Baixa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Observações</label></label>
                        <textarea name="task_description" value="{{ $task->task_description }}" class="form-control textarea"> {{ $task->task_description }} </textarea>
                    </div>
                </div>
                <div class="card-footer mt-2">
                    <button type="submit" class="btn btn-primary">Salvar</button>

                    <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
    </form>
@endsection
