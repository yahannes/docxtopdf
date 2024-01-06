<!DOCTYPE html>
<html>
<head>
    <title>Laravel Word Dox File to PDF File Example - tutsmake.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
        
<body>
<div class="container">
         
    <div class="panel panel-primary">
    
      <div class="panel-heading">
        <h2>Laravel 10|9|8 Word Dox File to PDF File Example - Tutsmake.com</h2>
      </div>
    
      <div class="panel-body">
          
        <form action="{{ URL('word-docx-to-pdf') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-3">
                <strong class="form-label" for="inputFile">Upload Word File:</strong>
                <input 
                    type="file" 
                    name="file" 
                    id="inputFile">
            </div>
     
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Convert Word To PDF</button>
            </div>
        
        </form>
        
      </div>
    </div>
</div>
</body>
      
</html>