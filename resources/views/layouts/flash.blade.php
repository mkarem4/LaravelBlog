@if ($flash = session('message'))
  <div class="alert alert-success" role="alert" id="flash-message">
      {{ $flash }}
  </div>
@endif
