@extends('layout.layout')
@section('content')
<form  action="{{ route('task.store') }}" method="post">
    @csrf
        <div class="card-header mt-4">
            <h2>Cadastro de tarefas</h2>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="col-12">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInput">Título <b style="color: red">*</b></label>
                            <input name="task_name" class="form-control" maxlength="45" placeholder="Digite um título"
                                required>
                        </div>
                        <div class="form-group  col-4">
                            <label for="exampleInput">Selecione uma prioridade para tarefa</label>
                            <select name="priority" class="form-control text-center select">
                                <option value=" ">Selecione uma prioridade</option>
                                <option value="Alta">Alta</option>
                                <option value="Media">Média</option>
                                <option value="Baixa">Baixa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Observações</label></label>
                        <textarea name="task_description" class="form-control textarea"></textarea>
                    </div>
                </div>
                <div class="card-footer mt-2">
                    <button type="submit" class="btn btn-primary">Salvar</button>

                    <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
    </form>
@endsection
