@extends('layouts.app')

@section('content')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hola, {{ Auth::user()->name }}</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver perfil &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      @if(Auth::user()->rol == 'student')
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
        <h2 class="text-center">Tareas</h2>
          <ul class="list-group">
            @forelse (($tasksData) as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{ $task->name }}
            <span class="badge badge-primary badge-pill">{{ $task->total }}</span>
            </li>
            @empty
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <p>No hay tareas, wiii</p>
            </li>
            @endforelse
          </ul>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>


        <div class="col-md-4">
          <h2 class="text-center">Exámenes</h2>
          <div class="accordion" id="accordionExample">
          <ul class="list-group">
            @forelse ($examsData as $exam)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$exam->id}}" aria-expanded="true" aria-controls="collapseOne">
                {{ ucfirst($exam->task_name) }} <br> {{ $exam->signature_name }}
              </button>
            <small>{{date_format(date_create($exam->finnished_at),"d/m/y")}}</small>
            </li>
            <div id="collapse{{ $exam->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                {{ ucfirst($exam->description) }}
              </div>
            </div>
            @empty
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <p>No hay exámenes pronto</p>
            </li>
            @endforelse
          </ul>
        </div>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>


        <div class="col-md-4">
          <h2 class="text-center">Mensajes</h2>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Sin leer
            <span class="badge badge-primary badge-pill">{{ $messagesNotRead }}</span>
            </li>
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#ModalSend">Enviar Mensaje</button>
              <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#modalRecieve">Recibidos</button>
            </div>
          </ul>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
      </div>

      <!-- Modal -->

      <div class="modal fade" id="ModalSend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalSendLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ url('home/crear')}}">
                @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">@</label>
                    </div>
                    <select name="destinatario" class="custom-select" id="inputGroupSelect01">
                      @foreach ($studentsData as $student)
                    <option  value="{{$student->id}}">{{ $student->name ." (". ucfirst($student->rol).")" }}</option>
                      @endforeach
                    </select>
                  </div>                
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea name="mensaje" class="form-control" id="message-text"></textarea>
                  <input type="hidden" name="from_id" value="{{ auth()->user()->id }}">
                </div>
                <div class="form-group">
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- /Modal -->

<!-- Modal -->
<div class="modal fade" id="modalRecieve" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalRecieveLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalRecieveLabel">Messages Received</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              @forelse ($form as $item)
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home{{ $item->id }}" role="tab" aria-controls="home">{{ $item->name }}
              <small class="text-center">{{date_format(date_create($item->time_sent),"d/m/y - H:m")}}</small>
            </a>
              @empty
                  <p>No hay mensajes</p>
              @endforelse
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              @foreach ($form as $item)
            <div class="tab-pane fade show" id="list-home{{ $item->id }}" role="tabpanel" aria-labelledby="list-home-list">{{ $item->content }}</div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">All read</button>
      </div>
    </div>
  </div>
</div>
      <!-- /Modal -->
      @endif

      <hr>

    </div> <!-- /container -->

  </main>
@endsection
