@extends('layouts.app')

@section('professor')

<div class="container table-container">

    <div class="row">

        <div class="col-md-1">
            <br>
        </div>

        <div class="col-md-10">

            <div class="container">

                <table class="table table-hover">
            
                    <thead class="thead">
                        <tr>
                            <th scope="col">Last Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
            
                        </tr>
                    </thead>
            
                    @foreach ($addprofessor as $item)
                                
                    <tbody class="tbody">
                        <tr>
            
                            <td>{{$item->proflname}},</td>
                            <td>{{$item->proffname}}</td>
            
            
                            <td><a type="button" class="btn view-btn" href="/professor/{{$item->id}}">View</a></td>
            
                            <td>
                                <form action="/professor/{{$item->id}}" method="post">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <input class="btn delete-btn" type="submit" value="Delete">
                                </form>
            
                            </td>
                            
                        </tr>
                    </tbody>
                        
                    @endforeach
            
                </table>
            
            </div>
            
        </div>

        <div class="col-md-1">
            <br>
        </div>

    </div>

</div>
    
@endsection