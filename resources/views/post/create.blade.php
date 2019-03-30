<form action=" {{ route('post.store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
Title:
  <input type="text" name="title">
  <br>
  Content:
  <textarea name="content" id="" cols="30" rows="10"></textarea>
  <br>
  Images:
  <input type="file" name="images">
  <button type="submit">Save</button>
  
  </form>
