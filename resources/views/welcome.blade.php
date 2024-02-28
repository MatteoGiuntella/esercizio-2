@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<div>
   <div class="row">
      @foreach ($films as $index => $singlefilm)
         <div>
            <span>
               Titolo film:
               {{$singlefilm->title}}
            </span>
         </div>
         <div>
            <span>
               Anno di Rilascio:
               {{$singlefilm->release_year}}
            </span>
         </div>
         <div>
            <span>
               Regista:
               {{$singlefilm->director}}
            </span>
         </div>
         <div>
            <span>
               Genere:
               {{$singlefilm->genre}}
            </span>
         </div>
         <div>
            <span>
               Attore Principale: 
               {{$singlefilm->main_actor}}
            </span>
         </div>
         <div>
            <span>
               Durata:
               {{$singlefilm->duration_minutes}}
            </span>
         </div>
         <div>
            <span>
               Trama:
               {{$singlefilm->plot}}
            </span>
         </div>
         <div>
            <span>
               Lingua Originale:
               {{$singlefilm->language}}
            </span>
         </div>
      @endforeach
   </div>
</div>
@endsection

