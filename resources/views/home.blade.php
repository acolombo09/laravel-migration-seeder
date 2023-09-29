@extends("layouts.public")

@section("title", "Laravel Movie Model Controller")
  
@section("content")
  <div class="text-center">
    <h1 class="text-danger">Benvenuto!</h1>
    <h2>Ecco la tua tabella dei treni</h2>
  </div>

  <div class="container bg-dark bg-opacity-25">
    <div class="row">
      <div class="col-md-9 mx-auto px-0 d-flex justify-content-center flex-wrap">
        {{-- @foreach ($movies as $movie)
          <div class="col">
            <div class="card rounded-0 bg-transparent">
              <div class="card-body px-0 text-center">
                <h3>{{$movie->title}}</h3>
                <h4>{{$movie->original_title}}</h4>
                <h5>{{$movie->date}}</h5>
                <h6>Nationality: {{$movie->nationality}}</h6>
              </div>
            </div>
          </div>
          @endforeach --}}
        <table class="table mt-3">

          <thead>
  
            <tr>
              <th scope="col">#</th>

              <th scope="col">Company name</th>

              <th scope="col">Departure Station</th>

              <th scope="col">Date</th>

              <th scope="col">Arrival Station</th>

              <th scope="col">Departure Time</th>

              <th scope="col">Arrival Time</th>

              <th scope="col">Train Code</th>

              <th scope="col">Cart Number</th>
              
              <th scope="col">In time</th>

              <th scope="col">Canceled</th>
            </tr>
  
          </thead>
  
          <tbody>

            @foreach ($trains as $train)
            <tr>

              <th scope="row">
                {{$train->id}}
              </th>                    
            
              <td class="whitespace-nowrap">
                {{$train->company}}
              </td>
              
              <td class="whitespace-nowrap">
                {{$train->departure_station}}
              </td>
              
              <td class="whitespace-nowrap">
                {{$train->data}}
              </td>

              <td class="whitespace-nowrap">
                {{$train->arrival_station}}
              </td>
              
              <td class="whitespace-nowrap">
                {{$train->departure_time}}
              </td>
              
              <td class="whitespace-nowrap">
                {{$train->arrival_time}}
              </td>
              
              <td class="whitespace-nowrap">
                {{$train->train_code}}
              </td>
              
              <td class="whitespace-nowrap">
                {{$train->cart_number}}
              </td>
              
              <td class="whitespace-nowrap">
                @if ($train->in_time)
                  Yes
                @else
                  No
                @endif
              </td>
              
              <td class="whitespace-nowrap">
                @if ($train->canceled)
                  Yes
                @else
                  No
                @endif
              </td>
              
            </tr>
            @endforeach                                               
          </tbody>
  
        </table>
      </div>
    </div>
  </div>

@endsection