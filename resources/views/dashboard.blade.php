<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        
<div class="row container">
    <div class="col-5" align="center"><h1>File Manager</h1></div>
    <div class="col-6" align="right">
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <table><tr>
                    <td><input type="file" name="file" class="form-control"></td>
                    <td><button type="submit" class="btn btn-success">Upload</button></td>
                    </tr>
                </table>
        </form>
    </div>
</div>

 

    </x-slot>

   <div>
    <table class="table table-stripped table-bordered" style="width: 80%;" align="center">
        <tr>
            <th style="width: 50%; text-align: center;">File Name</th>
            <th style="width: 20%;text-align: center;">Size</th>
            <th style="width: 30%;text-align: center;">Actions</th>
       
        </tr>
        
             <tr>
            @if ($name = Session::get('file'))
             <td  style="width: 50%;text-align: center;">{{$name}}</td>
            @endif
            @if ($sizee = Session::get('size'))
             <td style="width: 20%;">{{$sizee}}</td>
            @endif
             <td style="width: 30%;">
                <a style="color: blue;" href="">Rename</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="color: blue;" href="file-delete">Delete</a></td>
            </tr>
       
        
    </table>
     
   </div>

</x-app-layout>
