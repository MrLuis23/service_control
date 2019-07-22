
<table class="table table-bordered" id="MyTable"> 
    <thead>    
        <tr>
            <th class="text-center">ID</th>        
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Age</th>                  
            <th class="text-center">Gender</th>  
            <th class="text-center">Rol</th>  
            <th class="text-center">Status</th> 
            <th class="text-center">Acciones</th>  
        </tr> 
    </thead>  
    <tbody>           
        @foreach($users as $user)
        <tr> 
            <td class="text-center">{{ $user->id }}</td>        
            <td class="text-center">{{ $user->name}}</td>            
            <td class="text-center">{{ $user->email }}</td>       
            <td class="text-center">{{ $user->age }}</td>       
            <td class="text-center">{{ $user->gender }}</td>        
            <td class="text-center">{{ $user->id_rol }}</td>    
            <td class="text-center">{{ $user->status }}</td>                                
            <td class="text-center">                
                <a href="{{route('services.borrar',$user->id)}}" class="btn btn-danger">ELIMINAR</a>     
                <a href="{{route('services.edit',$user->id)}}" class="btn btn-warning">EDITAR</a>     
            </td>   
            
        </tr>    
        @endforeach
    </tbody>  
</table>