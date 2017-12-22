@extends('layouts.app')

@section('content')
 @include('_includes.nav._manage')
 <div class="section" style="background-color:#f5f5f0; width: 1095px;margin-left: 210px; ">
 	
 <div class="columns">
 		
 		<div class="column">
 			
 			<h1 class="title">Espace de Gestion Des Utilisateurs</h1>

 		</div>
 		<a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-plus m-r-10" aria-hidden="true"></i></i> Cr&eacuteer nouveau utilisateur</a>


 	

 </div>
 <hr>
 <div class="card">
	<div class="card-content">
			  <table class="table is-narrow">
			      
			    		<thead>
			    			<tr>
			    				<th>Id</th>
			    				<th>Nom & P&eacutenom</th>
			    				<th>Email</th>
			    				<th>Date</th>
			    				<th></th>
			    			</tr>
			    		</thead>
			    		<tbody>
			    			@if (count($users) > 0)
    							@foreach($users as $user)
    								<tr>
    									<td>{{$user->id}}</td>
        								<td>{{$user->name}}</td>
        								<td>{{$user->email}}</td>
        								<td>{{$user->created_at->toFormattedDateString()}}</td>
 <td><a class="button is-outlined" href="{{route('users.show', $user->id)}}">Voir</a></td>
        			<td><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Editer</a></td>
    								</tr>
   								 @endforeach
							@endif
			    		</tbody>
			   
			    </table>
			 </div>

</div>	
{{$users->links()}}
</div>
@stop

