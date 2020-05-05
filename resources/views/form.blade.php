<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
      
      
      
  <div id="app">




    <div class="container">
              
            <form>
                <div class="form-group mt-4">
                  <label for="exampleFormControlInput1">Name</label>
                  <input type="text" class="form-control" name="name" id="name" 
                   placeholder="enter name..."  autocomplete="off" v-model="newItem.name">
                </div>
             
                <div class="form-group mt-2">
                    <label for="exampleFormControlInput1">Age</label>
                    <input type="number" class="form-control" name="age" id="age" v-model="newItem.age">
                  </div>
                  <div class="form-group mt-2">
                     <label for="exampleFormControlInput1">Proffesion</label>
                    <input type="text" class="form-control" name="proffesion" id="proffesion"
                     placeholder="enter proffesion..." autocomplete="off" v-model="newItem.proffesion">
                  </div>
               
                  <button type="submit" class="btn btn-primary" @click.prevent="createItem()">
                    Add
                  </button>
              </form>
              <p class="text-center alert alert-danger mt-4" v-bind:class="{hidden: hasError}">
                please fill all fields
              </p>

       </div>



    </div>
<script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
