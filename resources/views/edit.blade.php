


<form action="{{url('update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">  
        <input type="hidden" name="id" value="{{$category->id}}"/>  
              <label for="name">Name:</label><br/><br/>  
              <input type="text" class="form-control" name="name" value="{{$category->name}}"/><br/><br/>  
          </div>  


          <div class="form-group">      
              <label for="description">Description:</label><br/><br/>  
              <input type="text" class="form-control" name="description" value="{{$category->description}}"/><br/><br/>  
          </div>    

          <div class="form-group">      
              <label for="photo">Photo:</label><br/><br/>  
              <input type="file" class="form-control" name="photo" value="{{$category->photo}}"/><br/><br/>  
          </div>  
<br/>  
<button type="submit" class="btn-btn" >Update</button> 


</form>
