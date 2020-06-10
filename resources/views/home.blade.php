@extends('layouts.app')

@section('content')
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Hello, {{ Auth::user()->name }}</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver perfil &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      @if(Auth::user()->rol == 'student')
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
        <h2 class="text-center">Tareas {{Auth::user()->course->name_short}}</h2>
          <ul class="list-group">
            @foreach ((Auth::user()->course->signatures) as $signature)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{ $signature->name }}
            <span class="badge badge-primary badge-pill">{{ random_int(0,10) }}</span>
            </li>
            @endforeach
          </ul>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4">
          <h2 class="text-center">Exámenes</h2>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: red;">
              Cras justo odio
              <small class="">03/06/2020</small>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Dapibus ac facilisis in
              <small class="text-muted">3 days ago</small>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Morbi leo risus
              <small class="text-muted">3 days ago</small>
            </li>
          </ul>
      <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4">
          <h2 class="text-center">Mensajes</h2>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Sin leer
              <span class="badge badge-primary badge-pill"> </span>
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
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send message</button>
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
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Pedro</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Sara</a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Marta</a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Luis</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sapiente nesciunt ab iste pariatur, explicabo ipsum officiis eius maiores officia temporibus atque illo, porro incidunt totam animi dolores repudiandae nam!</div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo fuga tempora possimus ducimus delectus, consequatur non veniam sequi dignissimos? Officia deserunt nam iste modi ullam! Nostrum modi nobis ut dolorem!</div>
              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
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
