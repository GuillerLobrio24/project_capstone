@extends('layouts.app')

@section('subject')

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
                            <th scope="col">Subject Name</th>
                            <th scope="col">Subject Code</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
            
                        </tr>
                    </thead>
            
                    @foreach ($addsubject as $item)
                                
                    <tbody class="tbody">
                        <tr>
            
                            <td>{{$item->subjectname}}</td>
                            <td>{{$item->subjectcode}}</td>
            
            
                            <td><a type="button" class="btn view-btn" href="/subject/{{$item->id}}">View</a></td>
            
                            <td>
                                <form action="/subject/{{$item->id}}" method="post">
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