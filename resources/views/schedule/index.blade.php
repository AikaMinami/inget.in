@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger font-weight-bolder" href="{{ route('schedule.create') }}" style="color:black; font-family:Montserrat;">Create</a>
    </div>
    <h2>Schedule</h2>
    <div class="container">
        <div class="row" style="margin-bottom:3rem">
            <!-- Monday -->
            @foreach($schedules as $schedule)
            <div class="col-sm-4 container">
                <div class="card" style="min-height:200px">                    
                    <div class="card-body">
                        <h6 class="card-text d-inline">{{ $schedule->start }} - {{ $schedule->end }}</h6>
                        <div class="dropdown d-inline float-right">
                            <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:30px">
                            &sdot;&sdot;&sdot;
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('schedule.edit', $schedule->id) }}">Edit</a>                                
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteConfirmation{{ $schedule->id }}">Delete</a>
                            </div>
                        </div>
                        <h4 class="card-title mt-4 text-center">{{ $schedule->course }}</h4>
                        @if($schedule->location != NULL)
                            <p class="card-text">{{ $schedule->room }}<br>
                            @if(str_contains($schedule->location, 'www.'))
                                <a href="{{ $schedule->location }}">({{ $schedule->location }})</a>
                            @else
                                ({{ $schedule->location }})<br>
                            @endif
                        @endif
                        @if($schedule->teacher && $schedule->contact != NULL)    
                            <br>{{ $schedule->teacher }}: {{ $schedule->contact }}
                        @endif
                        </p>
                    </div>
                </div>                                            
            </div>
             
            <!-- Delete Confirmation Modal -->
             <div class="modal fade" id="deleteConfirmation{{ $schedule->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete this schedule?
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST">
                            @csrf
                            @method('DELETE')                            
                            <a href="{{ route('schedule.destroy', $schedule->id) }}"><button type="submit" class="btn btn-primary">Delete</button></a>
                        </form>                          
                    </div>
                    </div>
                </div>
            </div>
            <!-- End of Delete Confirmation Modal -->
            @endforeach
            <!-- end of Monday -->
                        <!-- Friday -->
                        <div class="col-sm-4 container">
            <h4 class="text-center">Friday</h4>
                <div class="card" style="margin-bottom:0.5rem">
                    <div class="card-title">
                        <h6 class="card-text" style="font-size:10pt">07:00 - 09:00</h6>
                    </div>
                    <div class="card-body" >
                        <h4 class="card-title text-center">Course Name</h4>
                        <h5 class="card-text text-center">Class</h5>
                        <p class="card-text">Lecturer Name : Lecturer Contact</p>
                    </div>
                </div>
            </div>
            <!-- end of Friday -->            
        </div>
    </div>
</div>
@endsection
