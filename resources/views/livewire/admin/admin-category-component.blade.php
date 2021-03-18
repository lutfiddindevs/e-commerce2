<div>
	<style type="text/css">
		nav svg{
			height: 20px;
		}
		nav .hidden {
			display: block !important;
		}
	</style>
    <div class="container" style="padding: 30px 0;">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<div class="row">
                           <div class="col-md-6">
                               All Categories
                           </div>  
                           <div class="col-md-6">
                               <a href="{{ route('admin.addcategory') }}" class="btn btn-success pull-right">Add New</a>
                           </div>               
                        </div>
    				</div>
    				<div class="panel-body">
    					<table class="table table-striped">
    						<thead>
    							<tr>
    								<td>Id</td>
    								<td>Category Name</td>
    								<td>Slug</td>
    								<td>Action</td>
    							</tr>
    						</thead>
    						<tbody>
    							@foreach($categories as $category)
    							<tr>
    								<td>{{ $category->id }}</td>
    								<td>{{ $category->name }}</td>
    								<td>{{ $category->slug }}</td>
    								<td></td>
    							</tr>
    							@endforeach
    						</tbody>
    					</table>
    					{{ $categories->links() }}
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
