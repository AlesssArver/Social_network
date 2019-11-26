<form action="/posts" method="post">
@csrf
  <div class="create-post field has-addons">
    <div class="control">
      <input class="input {{$errors->has('body') ? 'is-danger' : ''}}" type="text" name="body" placeholder="Your task">
    </div>
    <div class="control">
      <button type="submit" class="button">Create</button>
    </div>
  </div>
</form>
