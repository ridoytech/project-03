<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4d8395d8aa.js" crossorigin="anonymous"> </script>

    <title>Crud 2</title>
</head>
<body class="max-w-7xl mx-auto">


    {{-- navber start --}}

    <div class="navbar bg-neutral text-neutral-content">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Homepage</a></li>
              <li><a>Portfolio</a></li>
              <li><a>About</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-center">
          <a class="btn btn-ghost text-xl">Main Page</a>
        </div>
        <div class="navbar-end">
          <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
          </button>
          <button class="btn btn-ghost btn-circle">
            <div class="indicator">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
              <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
          </button>
        </div>
      </div>

    {{-- navber end --}}


        {{-- table start --}}


        <div>

            <div class="overflow-x-auto bg-[#E3E1D9]">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Roll</th>
                      <th>Total</th>
                      <th>Percentge</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($mark as $item)
                        
                    <tr>
                        <th>{{$item->name}}</th>
                        <th>{{$item->roll}}</th>
                        <th>{{$item->total}}</th>
                        <th>{{$item->percentage}}</th>
                        <th> 
                            <a href="{{'update/'.$item->id}}" class="text-white btn btn-success ml-2 pt-2" >
                              <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="{{'delete/'.$item->id}}"  class="text-white btn btn-error ml-2 pt-2" >
                              <i class="fa fa-trash"></i>
                            </a>
                            <a href="{{'view/'.$item->id}}" class="text-white btn btn-warning ml-2 pt-2">
                              <i class="fa fa-eye"></i>
                            </a>
                          </th>
                       
                      </tr>

                    @endforeach
                 
                  </tbody>
                </table>
              </div>

        </div>

        <div class="mt-4">

            <button class="btn btn-success" style="margin-left: 585px"> <a href="/add">Add Result</a> </button>

        </div>


        {{-- table end --}}
      

</body>
</html>