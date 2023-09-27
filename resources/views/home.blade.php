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
        <table class="table">

          <thead>
  
            <tr>

                <th scope="col">#</th>

          
                    
                <th scope="col">
                </th>

        
            </tr>
  
          </thead>
  
          <tbody>

            @foreach ($trains as $train)
            <tr>

                <th scope="row">
                    {{$train->id}}
                </th>                    
              
                <td>
                  {{$train->company}}
                </td>
                
                <td>
                  {{$train->departure_station}}
                </td>
                
                <td>
                  {{$train->arrival_station}}
                </td>
                
                <td>
                  {{$train->departure_time}}
                </td>
                
                <td>
                  {{$train->arrival_time}}
                </td>
                
                <td>
                  {{$train->train_code}}
                </td>
                
                <td>
                  {{$train->cart_number}}
                </td>
                
                <td>
                  {{$train->in_time}}
                </td>
                
                <td>
                  {{$train->canceled}}
                </td>
                
            </tr>
            @endforeach                                               
          </tbody>
  
        </table>
      </div>
    </div>
  </div>

@endsection