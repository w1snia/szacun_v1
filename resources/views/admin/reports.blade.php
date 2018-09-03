@extends('layouts.dashboard')



@section('header')
    <center><strong>USTAWIENIA</strong></center>
@endsection


@section('body')
   <br>

   <a class="btn btn-dark" href="{{route('admin.reports.showReport')}}"><i class="fas fa-file-pdf"> RAPORT</i></a><br>
   (wygeneruj raport pdf)

   <br><br>


    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
        <i class="fas fa-eraser"> USUŃ SZACUN</i>
    </button><br>
    (resetuje wszystkie punkty SZACUN oraz licznik przełożonych,<br>
    punkty TOTAL zostają bez zmian)

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
                <form action="{{route('admin.reports.resetChar')}}">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <p class="text-center">
                            Usuń punkty SZACUN<br>
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

<br><br>

   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete2">
       <i class="fas fa-eraser"> USUŃ KOMENTARZE</i>
   </button><br>
   (usuwa wszystkie komentarze)

   <!-- Modal -->
   <div class="modal modal-danger fade" id="delete2" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   {{--<h4 class="modal-title text-center" id="myModalLabel"></h4>--}}
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                               aria-hidden="true">&times;</span></button>

               </div>
               <form action="{{route('admin.reports.resetComment')}}">
                   {{method_field('delete')}}
                   {{csrf_field()}}
                   <div class="modal-body">
                       <p class="text-center">
                           Usuń wszystkie komentarze<br>
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

<br><br>
@endsection