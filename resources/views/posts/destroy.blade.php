<form action="{{route('posts.destroy',$post['id'])}}" method="DELETE" style="display: none;">
@dd("ccc")
   
    @csrf
    {{ method_field('DELETE') }}
    <!-- @method('DELETE') -->
</form>