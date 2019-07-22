
<table class="table table-bordered" id="MyTable"> 
    <thead>    
        <tr>
            <th class="text-center">ID</th>        
            <th class="text-center">User</th>
            <th class="text-center">Name</th>
            <th class="text-center">Status</th>                  
            <th class="text-center">Created at</th>  
            <th class="text-center">Updated at</th>  
            <th class="text-center">Acciones</th>  
        </tr> 
    </thead>  
    <tbody>           
        @foreach($services as $service)
        <tr> 
            <td class="text-center">{{ $service->id }}</td>        
            <td class="text-center">{{ $service->user_id}}</td>            
            <td class="text-center">{{ $service->name }}</td>       
            <td class="text-center">{{ $service->status }}</td>       
            <td class="text-center">{{ $service->created_at }}</td>        
            <td class="text-center">{{ $service->updated_at }}</td>                            
            <td class="text-center">                
                <a href="{{route('services.borrar',$service->id)}}" class="btn btn-danger">ELIMINAR</a>     
                <a href="{{route('services.edit',$service->id)}}" class="btn btn-warning">EDITAR</a>     
            </td>   
            
        </tr>    
        @endforeach
    </tbody>  
</table>