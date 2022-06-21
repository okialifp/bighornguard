<header class="section-header">
    <p>Report</p>
    <br>
    <h3>this is who wants to report</h3>
  </header>
<form action="{{ route('simpan-report') }}" method="post">

  {{ csrf_field() }}

  <div class="form-group" style="margin-left:220px;">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 500px;">
    <small id="emailHelp" class="form-text text-muted">We'll never share your report with anyone else.</small>
  </div>
  <div class="form-group" style="margin-left:220px;">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" style="width : 500px;"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" style="margin-left:220px;">Submit</button>
</form>