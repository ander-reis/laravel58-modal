@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <h1>Lista Modal</h1>

            <ul class="list-group">
                @foreach($model as $item)
                    <li class="list-group-item">{{ $item->name }} -
                        <a href="#"
                           class="float-right"
                           data-toggle="modal"
                           data-target="#modalExemplo"
                           data-name="{{ $item->name }}"
                           data-city="{{ $item->city }}"
                        >modal</a></li>
                @endforeach
            </ul>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>name: <span id="name"></span></p>
                    <p>city: <span id="city"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </div>
        </div>
    </div>

    @push('list-one-script')
        <script type="text/javascript">
            // $(document).ready(function(){
                $('#modalExemplo').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);

                    var name = button.data('name');
                    var city = button.data('city');
                    console.log(city);
                    var modal = $(this);
                    modal.find('.modal-body #name').html(name);
                    modal.find('.modal-body #city').html(city);
                });
            // });
        </script>
    @endpush
@endsection
