<div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="{{isset($model) ? $model->name : ''}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" value="{{isset($model) ? $model->email : ''}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword4">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword4" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  <button class="btn btn-dark">Cancel</button>