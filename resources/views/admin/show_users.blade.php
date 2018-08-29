@extends('layouts.dashboard')

@section('header')


    <center>
        <a class="btn btn-info" href="{{route('admin.dashboard')}}"><i class="fas fa-list-ul"> PRZEŁOŻENI</i></a>
        <a class="btn btn-info" href="{{route('admin.show.user')}}"><i class="fas fa-list-ul"> PRACOWNICY</i></a>
        <a class="btn btn-success" href="{{route('admin.create.supervisor')}}"><i class="fas fa-user-plus"> PRZEŁOŻONY</i></a>
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


        </tr>
        @foreach($users as $user)
            <tr>
                {{--<td>{{$supervisor->id}}</td>--}}
                <td><a href="{{route('admin.userProfile',$user->id)}}">{{$user->username}}</a></td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->department}}</td>
                @if($user->i > 0)
                    <td><h4><font color="green">I</font></td>
                @else
                    <td><h4><font color="red">I</font></td>
                @endif
                @if($user->q > 0)
                    <td><h4><font color="green">Q</font></td>
                @else
                    <td><h4><font color="red">Q</font></td>
                @endif
                @if($user->o > 0)
                    <td><h4><font color="green">O</font></td>
                @else
                    <td><h4><font color="red">O</font></td>
                @endif
                @if($user->r > 0)
                    <td><h4><font color="green">R</font></td>
                @else
                    <td><h4><font color="red">R</font></td>
                @endif
                @if($user->i2 > 0)
                    <td><h4><font color="green">I</font></td>
                @else
                    <td><h4><font color="red">I</font></td>
                @endif
                @if($user->a > 0)
                    <td><h4><font color="green">A</font></td>
                @else
                    <td><h4><font color="red">A</font></td>
                @endif
                @if($user->n > 0)
                    <td><h4><font color="green">N</font></td>
                @else
                    <td><h4><font color="red">N</font></td>
                @endif
                {{--<td><a class="btn btn-dark" href="{{route('admin.delete.user',$user->id)}}">Usuń</a></td>--}}
                <td>

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                        <i class="fas fa-times"></i>
                    </button>


                    <!-- Modal -->
                    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    {{--<h4 class="modal-title text-center" id="myModalLabel"></h4>--}}
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>

                                </div>
                                <form action="{{route('admin.delete.user',$user->id)}}">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <p class="text-center">
                                            Usuń użytkownika {{$user->username}}<br>
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
