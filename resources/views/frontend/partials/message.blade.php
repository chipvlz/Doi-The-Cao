<div class="message">
  <div class="container content clearfix ng-scope">
      @if(session()->has('success'))
          <div class="alert alert-success alert-dismissable" style="padding: 7px; border-radius: 0px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{session()->get('success')}}
          </div>
      @endif
      @if($errors->any())
          <div class="alert alert-danger alert-dismissable" style="padding: 7px; border-radius: 0px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Lỗi!</strong> {{$errors->first()}}
          </div>
      @endif
  </div>
</div>
