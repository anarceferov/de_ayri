@extends('back.layouts.master')
@section('title', 'Silinən Məqalələr')
@section('content')

<div class="container-fluid mt-3">
<div class="card shadow border border-primary">

    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        <strong>{{$articles->count()}} - Ədəd silinən meqale var</strong>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="text-center">
            <tr>
              <th><b>IMAGE</b></th>
              <th><b>TITLE</b></th>
              <th><b>HİT</b></th>
              <th><b>CREATED DATE</b></th>
              <th><b>UPDATED DATE</b></th>
              <th><b>DELETED DATE</b></th>
              <th><b>PROCESSİNG</b></th>

            </tr>
          </thead>
          <tbody class="text-center">
              @foreach($articles as $article)
            <tr>
              <td><img src="{{asset($article->image)}}" alt="" width='200' height='150'></td>
              <td>{{$article->title}}</td>
              <td>{{$article->hit}}</td>
              <td>{{$article->created_at}}</td>
              <td>{{$article->updated_at}}</td>
              <td>{{$article->deleted_at}}</td>
              <td class='text-center'>
                <a href="{{route('dashboard.articles.recover' , $article->id)}}" class='btn btn-sm btn-primary' title='GERI QAYTAR'><i class='fa fa-recycle'></i></a>
                <a href="{{route('dashboard.articles.harddelete' , $article->id)}}" class='btn btn-sm btn-danger'  title='SIL'><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

</div>
</div>



@endsection




@section('js')
@endsection