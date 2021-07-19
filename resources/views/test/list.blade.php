@extends('back.layouts.master')
@section('content')


<div class="card border border-dark shadow-lg">
    <div class="card-header bg-white">
        <a href="{{route('dashboard.forms.create')}}" class="btn btn-dark"> <i class="fas fa-plus"></i>
            Add</a>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" style="border: 3px solid black;">
                    <thead class="text-center border border-dark">
                        <tr class="bg-secondary text-light">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Image</th>
                            <th scope="col">Processing</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                        <tr>
                            <th class="text-center align-middle">
                                <div class="badge badge-pill badge-dark">{{$loop->iteration}}</div>
                            </th>
                            <th class="align-middle">{{$form->name}}</th>
                            <th class="align-middle">{{$form->email}}</th>
                            <th class="align-middle">{{$form->image}}</th>
                            <td class="text-center align-middle">
                                <a href="{{route('dashboard.forms.edit' , $form->id)}}"
                                    class="btn btn-info d-inline btn-sm" type="button"><i
                                        class="fas fa-pencil-alt"></i></a>

                                <form action="{{route('dashboard.forms.destroy' , $form->id)}}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit"><i
                                            class="far fa-trash-alt"></i></button>
                                </form>

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