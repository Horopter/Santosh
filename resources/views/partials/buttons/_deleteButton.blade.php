{!!Form::open(['route'=>['posts.destroy',$post-> id], 'method' => 'DELETE'])!!}
{!!  Form::button('<span class="fa-stack fa-lg" style="color: #FF0800"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-trash-o fa-stack-1x fa-inverse"></i></span>', array('type' => 'submit', 'class' => ''))  !!}
{!! Form::close()!!}