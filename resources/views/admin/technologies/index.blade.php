@extends('layouts.app')
@section('title')
Index-tech
@endsection

@section('content')


<div class="container w-50">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    
                    <th>Project Technologies</th>
                    @auth
                    <th>Edit</th>
                    <th>Delete</th>
                    @endif
                </tr>
            </thead>
            @foreach ($technologies as $technology)
                <tbody>
                    <tr>
                        
                        <td>{{ $technology->name }}</td>
                        @auth
                        <td><a href="{{ route('technologies.edit', $technology) }}" class="btn btn-dark">Edit</a></td>
                        <td>
                            <form class="form-delete" action="{{ route('technologies.destroy', $technology) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-dark">Delete</button>

                                <div class="my-modal">
                                    <div class="modal-container">
                                        <h5 class="text-center me-5">Delete this technology?</h5>
                                        <button class="btn btn-danger modal-run mx-5">Yes, Delete</button>
                                        <button class="btn btn-success modal-stop">No, Comeback</button>
                                    </div>
                                </div>

                            </form>
                        </td>
                        @endif
                    </tr>
                </tbody>
            @endforeach
        </table>

    </div>
</div>


@endsection