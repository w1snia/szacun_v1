@extends('layouts.dashboard')

@section('header')


    <center>
        <a class="btn btn-info" href="{{route('admin.dashboard')}}"><i class="fas fa-list-ul"> PRZEŁOŻENI</i></a>
        <a class="btn btn-info" href="{{route('admin.show.user')}}"><i class="fas fa-list-ul"> PRACOWNICY</i></a>
        <a class="btn btn-success" href="{{route('admin.create.supervisor')}}"><i class="fas fa-user-plus">
                PRZEŁOŻONY</i></a>
        <a class="btn btn-success" href="{{route('admin.create.user')}}"><i class="fas fa-user-plus"> PRACOWNIK</i></a>
        <a class="btn btn-dark" href="{{route('admin.reports')}}"><i class="fas fa-cogs"></i></a>
    </center>


@endsection

@section('body')

    <table class="table table-hover">
        <tr>
            {{--<th>ID</th>--}}
            <th>LOGIN</th>
            <th>IMIĘ</th>
            <th>NAZWISKO</th>
            <th>DZIAŁ</th>
            <th>COUNTER</th>

        </tr>
        @foreach($supervisors as $supervisor)
            <tr>
                <td><a href="{{route('admin.supervisorProfile',$supervisor->id)}}">{{$supervisor->username}}</a></td>
                <td>{{$supervisor->name}}</td>
                <td>{{$supervisor->surname}}</td>
                <td>{{$supervisor->department}}</td>
                <td>{{$supervisor->count}}</td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$supervisor->id}}">
                        <i class="fas fa-times"></i>
                    </button>


                    <!-- Modal -->
                    <div class="modal modal-danger fade" id="delete-{{$supervisor->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>

                                </div>
                                <form action="{{route('admin.delete.supervisor',$supervisor->id)}}">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <p class="text-center">
                                            Usuń użytkownika {{$supervisor->username}}<br>
                                            Jesteś pewny?
                                        </p>
                                        <input type="hidden" name="category_id" id="cat_id" value="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Tak</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Nie</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

    </table>



@endsection
