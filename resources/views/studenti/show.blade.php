@extends ('layouts.app')

@section('one_student')
  <div class="container">
    <div class="row">
      <ul>
        @foreach($clickedstudent as $k=>$value)
          <li>{{$k}} : {{$value}}</li>
        @endforeach
      </ul>

    </div>

  </div>
@endsection
