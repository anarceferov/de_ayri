@extends('back.layouts.master')
@section('title', 'Məqalələr')
@section('content')

<div class="container-fluid mt-3">
<div class="card shadow border border-primary">

    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        <strong>{{$articles->count()}} - Ədəd meqale var</strong>
        <a href="{{route('dashboard.articles.trashed')}}" class='btn btn-danger btn-sm float-right'><i class='fa fa-trash'></i>  Silinənlər</a>
        <a href="{{route('dashboard.articles.create')}}" class='btn btn-primary btn-sm'><i class='fa fa-plus'></i>  Əlavə et</a>
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
              <th><b>STATUS</b></th>
              <th><b>PROCESSİNG</b></th>
            </tr>
          </thead>
          <tbody class="text-center">
              @foreach($articles as $article)
            <tr>
              <td><img src="{{asset($article->image)}}" alt="" width='200' height='150'></td>
              <td>{{ Str::limit($article->title , 20)}}</td>
              <td>{{$article->hit}}</td>
              <td>{{$article->created_at}}</td>
              <td>{{$article->updated_at}}</td>
              <td>
                
                <input class='switch'
                article-id="{{$article->id}}"
                type="checkbox"
                data-toggle="toggle"
                data-onstyle="success" 
                data-offstyle="danger" 
                @if($article->status==1) checked 
                @endif 
                >
  
              </td>
              <td class='text-center'>
                <a href="{{route('article' , $article->slug)}}" target='_blank' class='btn btn-sm btn-success' title='LOOK'><i class='fa fa-eye'></i></a>
                <a href="{{route('dashboard.articles.edit' , $article->id)}}" class='btn btn-sm btn-primary' title='EDIT'><i class='fa fa-edit'></i></a>
                <a href="{{route('dashboard.articles.delete' , $article->id)}}" class='btn btn-sm btn-danger'  title='DELETE'><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

</div>
</div>


@section('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@endsection




@section('js')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script>
  $(function(){
    $('.switch').change(function(){
      id = $(this)[0].getAttribute('article-id');
      statu=$(this).prop('checked');
      $.get("{{route('dashboard.switch')}}", {id:id , statu:statu}, function(data, status){ 
      });
    })
  })
</script>
@endsection