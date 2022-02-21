<section class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Level</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon )
                
          <tr>
            <th scope="row">1</th>
            <td>{{$pokemon->name}}</td>
            <td>{{$pokemon->type}}</td>
            <td>{{$pokemon->level}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</section>