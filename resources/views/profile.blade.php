<br>
<br>
<br>
<a href="{{route('admin.index')}}">Home</a><br>
<tbody>
        

        
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->type}}</td>
                <td><a href="{{route('profile',$user->id)}}">Got to profile</a></td>                
                @if ($user->status=='active')
                    <td>-</td>
                @else
                    <td><a href="{{route('admin.statusActive',$user->id)}}">Add</a></td>
                @endif
                @if ($user->status=='block')
                    <td>-</td>                                    
                @else
                <td><a href="{{route('admin.statusBlock',$user->id)}}">Block</a></td>                                    
                @endif
            </tr>
        