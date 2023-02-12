@extends('layouts.app')

@section('otherannouncement')

    {{-- Room Main Content --}}

    <div class="container table-container">

        <table class="table table-hover">

            <thead class="thead">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Other Announcement Title</th>
                    <th scope="col">Other Announcement Content</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
                        
            @foreach ($otherannouncement as $item)
                        
            <tbody class="tbody">
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->otherannouncementtitle}}</td>
                    <td>{{$item->otherannouncementcontent}}</td>

                    <td><a type="button" class="btn view-btn" href="/otherannouncement/{{$item->id}}">View</a></td>

                    <td>
                        <form action="/otherannouncement/{{$item->id}}" method="post">
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