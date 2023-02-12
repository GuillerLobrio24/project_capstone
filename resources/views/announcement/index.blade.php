@extends('layouts.app')

@section('announcement')

    {{-- Room Main Content --}}

    <div class="container table-container">

        <table class="table table-hover">

            <thead class="thead">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Announcement Title</th>
                    <th scope="col">Announcement Content</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
                        
            @foreach ($announcement as $item)
                        
            <tbody class="tbody">
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->announcementtitle}}</td>
                    <td>{{$item->announcementcontent}}</td>

                    <td><a type="button" class="btn view-btn" href="/announcement/{{$item->id}}">View</a></td>

                    <td>
                        <form action="/announcement/{{$item->id}}" method="post">
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

@endsection