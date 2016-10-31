@if($source == 'welcome')
@foreach($posts as $post)
    <div class="post-preview w3-card-8">
        <a href="{{url('slugg.single',$post -> slug)}}">
            <h2 class="post-title">
                {{ $post -> title }}
            </h2>
            <h3 class="post-subtitle">
                {{ $post -> subtitle }}
            </h3>            
        </a>
        <h6 class="post-body">
                {{ substr($post -> body,0,30)}} {{ strlen($post-> body > 30)?"...":"" }}
            </h6>
        <p class="post-meta">Posted by <a href="#"> Horopter </a> on {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post -> created_at, 'UTC')->setTimezone('Asia/Kolkata')->format('F d, Y @ h:i:s A T') }}</p>
        <div class="right">
            @include('partials.buttons._editButton')
            @include('partials.buttons._deleteButton')
        </div>
    </div>
    <hr>
@endforeach
@else
<div class="w3-card-8">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th> # </th>
                    <th> Title </th>
                    <th> Subtitle </th>
                    <th> Body </th>
                    <th> Created On </th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                        <td>{{ $post -> id }}</td>
                        <a href="{{url('slug/'.$post -> slug)}}">
                        <td>{{ $post -> title }}</td>
                        </a>
                        <td>{{ $post -> subtitle }}</td>
                        <td>{{ substr($post -> body,0,30)}} {{ strlen($post-> body > 30)?"...":"" }}</td>
                        <td>{{ date('M j, Y h:i a',strtotime($post-> created_at )) }}</td>
                        <td>
                        @include('partials.buttons._editButton')
                        @include('partials.buttons._deleteButton')
                        </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif