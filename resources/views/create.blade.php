<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 
        Create project
    </title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="py-4 bg-blue-500 text-center text-white"> Welcome To Create</h1>
    <div class="container mx-auto">

        <form action="create" method="POST" class="py-4" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="image" class="py-4" >
            <input type="text" name="name" id="name" class="py-4" placeholder="Name ..." accept="image/*">
            <input type="text" name="description" id="description" class="py-4" placeholder="Description">
            <input type="text" name="price" id="price" class="py-4" placeholder="Price" > 
            <button class="bg-blue-700 py-4 mx-4 text-white"> Send</button>
        </form>
        
    </div>
</body>
</html>